<?php base_path(); ?>

<style>
.card-dark:not(.card-outline) .card-header {
  background-color: #0d332d;
}
.btn-secondary {
  color: #ffffff;
  background-color: #f3b668;
  border-color: #f3b668;
}
.sidebar .nav-link:hover {
  background: #123630;
}
.sidebar li i {
  font-size: 20px;
  margin-right: 20px;
  color: #F4B769;
  max-width: 50px;
}
.sidebar li h4 {
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 600;
}
.btn-primary {
  color: #ffffff;
  background-color: #0D332D;
  border-color: #0D332D;
  box-shadow: none;
}
</style>

<div style="padding-bottom: 10px;">
    <a href="<?php rootURL('admin/blog/'); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
        <i class="fas fa-arrow-circle-left"></i> Go Back
    </a>
</div>

<div class="card card-dark">
    <div class="card-header">
        <div class="row">
            <div class="form_title_custom">Add New Blog</div>
        </div>
    </div>
    
    <div class="card-body">
        <form class="form-horizontal" action="<?=base_url('admin/blog/add/')?>" method="post" enctype="multipart/form-data">
            <div class="card-body" style="padding-top: 0px;">
                <div class="row col-12">
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Date</label>
                        <div class="col-sm-3">
                            <input type="datetime-local" class="form-control form-control-sm" id="date" name="date" placeholder="Date" required>
                        </div>
                    </div>
                    <div class="form-group col-12 row">
                        <label for="perma" class="col-sm-2 col-form-label text-muted">Permalink</label>
                        <div class="col-sm-10">
                            <input class="form-control form-control-sm" id="perma" name="perma" placeholder="Permalink" required>
                        </div>
                    </div>
                    <div class="form-group col-12 row">
                        <label for="title" class="col-sm-2 col-form-label text-muted">Title</label>
                        <div class="col-sm-10">
                            <textarea rows="1" class="form-control form-control-sm" id="title" name="title" placeholder="Title" required></textarea>
                        </div>
                    </div>
                    <div class="form-group col-12 row">
                        <label for="description" class="col-sm-2 col-form-label text-muted">Description</label>
                        <div class="col-sm-10">
                            <textarea rows="5" class="form-control form-control-sm" id="description" name="description" required placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-12 row">
                        <label for="blog_content" class="col-sm-2 col-form-label text-muted">Content</label>
                        <div class="col-sm-10">
                            <!-- Quill editor container -->
                            <div id="editor" style="height: 500px;"></div>
                            <!-- Hidden input to store the content -->
                            <input type="hidden" name="blog_content" id="blog_content">
                        </div>
                    </div>
                    <div class="form-group col-12 row">
                        <label for="image" class="col-sm-2 col-form-label text-muted">Image</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control form-control-sm" id="image" name="image" onchange="readURL(this);">
                        </div>
                    </div>
                    <div class="col-12" style="padding-right:20px;">
                        <button type="submit" name="add" value="Save" class="btn btn-primary float-right">
                            <small><i class="fa fa-check"></i></small> Save
                        </button>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </form>
    </div>
    <!-- /.card-body -->
</div>

<div style="padding: 30px!important;"></div>

<script>
    function onTimeChange(time_id, label_id) {
        var inputEle = document.getElementById(time_id);
        var timeSplit = inputEle.value.split(':'),
            hours,
            minutes,
            meridian;
        hours = timeSplit[0];
        minutes = timeSplit[1];
        if (hours > 12) {
            meridian = 'PM';
            hours -= 12;
        } else if (hours < 12) {
            meridian = 'AM';
            if (hours == 0) {
                hours = 12;
            }
        } else {
            meridian = 'PM';
        }
        $('#' + label_id).text(hours + ':' + minutes + ' ' + meridian);
    }
</script>

<!-- Include Quill stylesheet and library -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

<script type="text/javascript">
    // Import Parchment
    const Parchment = Quill.import('parchment');

    // Custom Bold Format
    class CustomBold extends Parchment.Inline {
        static create(value) {
            let node = super.create(value);
            node.setAttribute('style', 'font-weight: bold');
            return node;
        }
        
        static formats(node) {
            return node.getAttribute('style') === 'font-weight: bold';
        }
    }

    CustomBold.blotName = 'custom-bold';
    CustomBold.tagName = 'span';  // Use <span> tag

    // Register the custom format
    Quill.register(CustomBold, true);

    // Custom Link Format
    const Link = Quill.import('formats/link');
    class CustomLink extends Link {
        static create(value) {
            let node = super.create(value);
            let span = document.createElement('span');
            span.appendChild(node.cloneNode(true));
            return span;
        }
        
        static formats(node) {
            let a = node.querySelector('a');
            return a ? a.getAttribute('href') : undefined;
        }
    }

    CustomLink.blotName = 'custom-link';
    CustomLink.tagName = 'span';  // Use <span> tag

    // Register the custom format
    Quill.register(CustomLink, true);

    // Initialize Quill editor
    var quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, 4, 5, false] }],
                ['bold', 'italic', 'underline'],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                ['link', 'image'],
                ['clean'] // remove formatting button
            ]
        },
        formats: ['custom-bold', 'custom-link']  // Use custom formats
    });

    // On form submit, update the hidden input with the editor content
    document.querySelector('form').onsubmit = function() {
        document.querySelector('input[name=blog_content]').value = quill.root.innerHTML;
    };
</script>

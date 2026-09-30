<?php base_path(); ?>
<?php if (isset($edit_data)) : foreach ($edit_data as $i) : ?>
    <div style="padding-bottom: 10px;">
        <a href="<?php rootURL("admin/blog/"); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
            <i class="fas fa-arrow-circle-left"></i> Go Back
        </a>
    </div>
    <div class="card card-dark">
        <div class="card-header">
            <div class="row">
                <div class="form_title_custom">EDIT - <?= strtoupper(get_phrase('blog')) ?></div>
            </div>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="<?= base_url('admin/blog/edit/' . $i['id'] . '/') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body" style="padding-top: 0px;">
                    <div class="row col-12">
                        <div class="form-group col-12 row">
                            <label for="date" class="col-sm-2 col-form-label text-muted">Date</label>
                            <div class="col-sm-3">
                                <?= DateTime::createFromFormat('Y-m-d H:i:s', $i['date'])->format('d/m/Y g:i A'); ?>
                                <input type="datetime-local" class="form-control form-control-sm" id="date" name="date" placeholder="Date" value="<?= DateTime::createFromFormat('Y-m-d H:i:s', $i['date'])->format('Y-m-d\TH:i'); ?>">
                            </div>
                        </div>
                        <div class="form-group col-12 row">
                            <label for="title" class="col-sm-2 col-form-label text-muted">Permalink</label>
                            <div class="col-sm-10">
                                <input rows="1" class="form-control form-control-sm" id="perma" name="perma" placeholder="Permalink" required value="<?= $i['perma']; ?>">
                            </div>
                        </div>
                        <div class="form-group col-12 row">
                            <label for="title" class="col-sm-2 col-form-label text-muted">Title</label>
                            <div class="col-sm-10">
                                <textarea rows="1" class="form-control form-control-sm" id="title" name="title" placeholder="Title" required><?= $i['title']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group col-12 row">
                            <label for="description" class="col-sm-2 col-form-label text-muted">Description</label>
                            <div class="col-sm-9">
                                <textarea rows="5" class="form-control form-control-sm" id="description" name="description" required placeholder="Description"><?= $i['description']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group col-12 row">
                            <label for="description" class="col-sm-2 col-form-label text-muted">Content</label>
                            <div class="col-sm-9">
                                <div id="editor"><?= htmlspecialchars($i['content'], ENT_QUOTES, 'UTF-8'); ?></div>
                                <input type="hidden" name="blog_content" id="blog_content" value="<?= htmlspecialchars($i['content'], ENT_QUOTES, 'UTF-8'); ?>">
                            </div>
                        </div>
                        <div class="form-group col-12 row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                <img id="img_show_div" style="width:100px;" src="<?= base_url() . $i['image']; ?>">
                            </div>
                        </div>
                        <div class="form-group col-12 row">
                            <label for="image" class="col-sm-2 col-form-label text-muted">Image</label>
                            <div class="col-sm-3">
                                <input type="file" class="form-control form-control-sm" id="image" name="image" onchange="readURL(this);">
                                <input type="text" id="idd" name="idd" value="<?= $i['id']; ?>" hidden>
                            </div>
                        </div>
                        <div class="col-12" style="padding-right:20px;">
                            <button type="submit" name="edit" value="Save" class="btn btn-primary float-right" style="float: right!important">
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
<?php endforeach; endif; ?>

<!-- Include Quill CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Include Quill JS -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
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

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Quill editor
    var quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': '1' }, { 'header': '2' }, { 'header': '3' }, { 'header': '4' }, { 'header': '5' }, { 'header': '6' }],
                [{ 'font': [] }],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                ['bold', 'italic', 'underline'],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'align': [] }],
                ['link', 'image'],
                ['clean']
            ]
        }
    });

    // Set the initial content of the editor
    var initialContent = `<?= $i['content']; ?>`; // Ensure this is raw HTML content
    quill.root.innerHTML = initialContent;

    // Update hidden input on form submit
    document.querySelector('form').addEventListener('submit', function() {
        document.querySelector('#blog_content').value = quill.root.innerHTML;
    });
});

</script>
        </div>
    <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<script type="text/javascript">
    function get_student_count_input(grade_upto){
        var grade_upto_array = {
            '15' : [],
            '14' : ['15'],
            '13' : ['14', '15'],
            '12' : ['13', '14', '15'],
            '11' : ['12', '13', '14', '15'],
            '10' : ['11', '12', '13', '14', '15'],
            '9' : ['10', '11', '12', '13', '14', '15'],
            '8' : ['9', '10', '11', '12', '13', '14', '15'],
            '7' : ['8', '9', '10', '11', '12', '13', '14', '15'],
            '6' : ['7', '8', '9', '10', '11', '12', '13', '14', '15'],
            '5' : ['6', '7', '8', '9', '10', '11', '12', '13', '14', '15'],
            '4' : ['5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15'],
            '3' : ['4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15'],
            '2' : ['3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15'],
            '1' : ['2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15'],
        };

        var name_array = grade_upto_array[grade_upto];

        $('.student_count_input').prop('readonly', false);
        $('.student_count_input').prop('required', true);

        name_array.forEach(function(element, index) {
            let boys = $('input[name="student_count[boys][' + element + ']"][type="number"]');
            boys.prop('readonly', true);
            boys.prop('required', false);
            boys.val('');
            let girls = $('input[name="student_count[girls][' + element + ']"][type="number"]');
            girls.prop('readonly', true);
            girls.prop('required', false);
            girls.val('');
            let total = $('input[name="student_count[total][' + element + ']"][type="number"]');
            total.val('');

            // get grand total
            get_grand_total();
        });

    }

    function check_stream_followed(checkbox){
        $(".stream_followed").not(checkbox).prop('checked', false);
    }

    function get_total(classes_id){
        // get classes total
        var boys_count = parseInt($('#boys_count_' + classes_id).val());
        var girls_count = parseInt($('#girls_count_' + classes_id).val());
        var class_total = 0;

        if (!isNaN(boys_count)) {
            class_total += boys_count;
        }
        if (!isNaN(girls_count)) {
            class_total += girls_count;
        }
        $('#total_count_' + classes_id).val(class_total);

        // get grand total
        get_grand_total();
    }

    function get_grand_total(){
        // Variable to store the sum
        var sum = 0;

        $(".student_count_input").each(function() {
            var value = parseInt($(this).val()); // Parse the value as an integer
            if (!isNaN(value)) { // Check if the parsed value is a valid number
                sum += value;
            }
        });

        $('#total_students').val(sum);
    }

    function get_total_staff(){
        // Variable to store the sum
        var sum = 0;

        $(".staff_count_input").each(function() {
            var value = parseInt($(this).val()); // Parse the value as an integer
            if (!isNaN(value)) { // Check if the parsed value is a valid number
                sum += value;
            }
        });

        $('#total_staffs').val(sum);
    }

    function get_school_info(school_id){
        if (school_id > 0){
            $.ajax({
                type: 'GET',
                url: "<?=base_url('register_school/get_school_list_info/?school_id=')?>" + school_id,
                dataType: 'json',
                success: function (data) {
                    if (data.status){
                        $('#school_category').val(data.school.category);
                        if (data.registration_status){
                            $('#phone').val(data.school_registration.phone);
                            $('#email').val(data.school_registration.email);
                            $('#communication_address').val(data.school_registration.communication_address);
                            $('#school_registration_id').val(data.school_registration.id);
                        }else {
                            $('#phone').val('');
                            $('#email').val('');
                            $('#communication_address').val('');
                            $('#school_registration_id').val('0');
                        }
                    }else{
                        message_error(data.message);
                        $('#school_id').val(null).trigger('change');
                        $('#school_category').val('');
                    }
                }
            });
        }
    }

    // get states list
    function get_states(country_id){
        $.ajax({
            type: 'GET',
            url: "<?=base_url('register_school/get_states_by_country/?country_id=')?>" + country_id,
            dataType: "html",
            success: function (data) {
                $('#state_id').html(data);
            }
        });
    }

    // get districts list
    function get_districts(state_id){
        $.ajax({
            type: 'GET',
            url: "<?=base_url('register_school/get_districts_by_state/?state_id=')?>" + state_id,
            dataType: "html",
            success: function (data) {
                $('#district_id').html(data);
            }
        });
    }


    // get school list
    function get_school_list(){
        var country_id = $('#country_id').val();
        var state_id = $('#state_id').val();
        var district_id = $('#district_id').val();
        $.ajax({
            type: 'GET',
            url: "<?=base_url('register_school/get_school_list/')?>",
            data: {country_id: country_id, state_id: state_id, district_id: district_id},
            dataType: "html",
            success: function (data) {
                $('#school_id').html(data);
            }
        });
    }

    // validate not available
    function is_na(user_input){
        const array = ["not available", "not applicable", "n/a", "n/0", "no", "na", "unavailable", "no data", "not provided", "none", "empty" , "-", ".", "n"];
        user_input = user_input.toLowerCase();
        return  array.includes(user_input);
    }

    function get_na(){
        return 'N/O';
    }

    // check committee name
    function check_committee_name(committee_name){
        if (is_na(committee_name)){
            $('#committee_name').val(get_na());
            $('#chairman_name').val(get_na());
            $('#chairman_phone').val(get_na());
            $('#general_secretary_name').val(get_na());
            $('#general_secretary_phone').val(get_na());
            $('#treasurer_name').val(get_na());
            $('#treasurer_phone').val(get_na());
        }
    }

    // check contact fields
    function check_contact_fields(item_string, field_array){
        if (is_na(item_string)){
            field_array.forEach(id => {
                $(id).val('N/O');
            });
        }
    }

    // check email
    function check_email_duplication(email){
        $.ajax({
            type: 'POST',
            url: "<?=base_url('register_school/check_email_duplication/')?>",
            data: {email: email},
            dataType: "json",
            success: function (data) {
                if (data.status !== 1){
                    message_error(data.message);
                    $('#email').val('');
                }
            }
        });
    }

    // check phone
    function check_phone_duplication(phone){
        $.ajax({
            type: 'POST',
            url: "<?=base_url('register_school/check_phone_duplication/')?>",
            data: {phone: phone},
            dataType: "json",
            success: function (data) {
                if (data.status !== 1){
                    message_error(data.message);
                    $('#phone').val('');
                }
            }
        });
    }

    $(document).ready(function() {
        $('.step1_form').submit(function(event) {
            var phone_length = $('#phone').val().length;
            if (phone_length!==10){
                event.preventDefault();
                message_error('Phone number should be 10 Digit!');
            }else{
                $('#register_button').hide();
                $('#register_button_loading').show();
            }
        });



        $('.step2_form').submit(function(event) {

                // check stream followed
                var stream_followed = $('input[name="stream_followed"]:checked').length;

                // check affiliation status
                var is_affiliated = $('input[name="is_affiliated"]:checked').length;

                //check affiliation no
                var is_affiliated_value = $('input[name="is_affiliated"]:checked').val();
                var affiliation_no = $('input[name="affiliation_no"]').val();


                if (stream_followed === 0) {
                    event.preventDefault();
                    message_error('Please choose a stream!');
                    $('#stream_followed_cbse').focus();
                }else if (is_affiliated === 0) {
                    $('#is_affiliated_yes').focus();
                    event.preventDefault();
                    message_error('Please specify affiliation status!');
                }else if (is_affiliated_value === '1' && affiliation_no === ''){
                    event.preventDefault();
                    $('#affiliation_no').focus();
                    message_error('Please enter affiliation number!');
                }else if (!($('.student_count_input').filter(function() { return this.value !== ''; }).length > 0)) {
                    event.preventDefault();
                    $('#grade_upto').focus();
                    message_error('Please enter student count!');
                }else{

                    $('#register_button').hide();
                    $('#register_button_loading').show();
                }

            });

        $('.step3_form').submit(function(event) {
            var regex = /^[0-9]{10}$/;
            var error = 0;

            $('.phone_number').each(function() {
                var value = $(this).val();
                if (value!=='N/O'){
                    if (!regex.test(value)) {

                        error = 1;
                    }
                }

            });
            if (error === 1){
                message_error('Enter a valid 10 digit Phone number!');
                event.preventDefault();
            }else{
                $('#register_button').hide();
                $('#register_button_loading').show();
            }

        });

        $('.step4_form').submit(function(event) {
            var regex = /^[0-9]{10}$/;
            var error = 0;

            $('.phone_number').each(function() {
                var value = $(this).val();
                if (value!=='N/O'){
                    if (!regex.test(value)) {

                        error = 1;
                    }
                }

            });
            if (error === 1){
                message_error('Enter a valid 10 digit Phone number!');
                event.preventDefault();
            }else{
                $('#register_button').hide();
                $('#register_button_loading').show();
            }
        });

        
    });


</script>

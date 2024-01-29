<?php get_header();?>

<div class="item_form_container">
<form action="" class="callback_form">
            <div class="callback_form_context_container">
                <label for=""><span>Full name</span></label>
                <br>
                <input type="text" class="form-input callback_name_input" placeholder="Full Name">
                <div class="rod_container">
                    <input type="checkbox">
                    <label for="">Man</label>
                    <input type="checkbox">
                    <label for="">Women</label>
                </div>
                <br>
                <label for=""><span>Email</span></label>
                <br>
                <input type="text" class="form-input" placeholder="Email">
                <br>
                <label for=""><span>Passport Info</span></label>
                <br>
                <div class="passport_data_container">
                    <div class="passport_number_container">
                        <input type="text" class="form-input passport_serial_input" placeholder="Серия">
                        <input type="text" class="form-input passport_number_input" placeholder="Номер">
                    </div>
                    <input type="text" class="form-input passport_who_input" placeholder="Кем выдан">
                    <input type="text" class="form-input passport_date_input" placeholder="Дата выдачи">
                    <input type="text" class="form-input passport_forDate_input" placeholder="Действителен до">
                </div>
                <br>
                <label for=""><span>Address</span></label>
                <br>
                <input type="text" class="form-input callback_address_input" placeholder="Adress">
                <br>
                <label for=""><span>Mobile phone</span></label>
                <br>
                <input type="text" class="form-input callback_phone_input" placeholder="Phone">
                <br>
                <div class="access_container">
                    <input type="checkbox">
                    <label for="">Privat terms accept</label>
                </div>
                <button class="submit_form_btn blue_btn">Pay</button>

            </div>
        </form>
</div>

<?php get_footer();?>
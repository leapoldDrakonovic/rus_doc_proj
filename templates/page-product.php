<?php get_header();?>



        <div class="container page_search_container">
            <form action="" class="search_form">
                <input type="text" class="search_input" placeholder="Search">
                <button class="search_btn light_blue_btn">
                    <img src="../assets/icons/search.svg" alt="">
                </button>
            </form>
        </div>



     
        <section class="item_section main_item_section">
            <div class="container main_item_section_container">


                <h3 class="main_item_section_title">
                    {object.title} + Download
                </h3>

                <div class="main_item_section_product_container">
                    <div class="product_img_container">
                        <img src="../assets/img/doc.jpg" alt="Document" class="product_img">
                    </div>
                    <div class="product_description_container">
                        <p class="product_description">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut blanditiis eius iure sequi, aliquid dolore expedita eum fuga veniam consequatur odit esse repellendus quae animi unde maiores ad porro similique.
                            Soluta unde eius officiis tenetur necessitatibus provident ea quia ducimus libero! Quas, nesciunt pariatur iure reiciendis modi minima at sequi, delectus excepturi porro rerum, expedita ipsam magni voluptates eum consequuntur!
                            Laboriosam iusto non rerum dolorum quia eum animi voluptates sunt ipsam suscipit? Velit ea quos explicabo, hic animi in reprehenderit earum eum aliquam adipisci libero tempore odit tempora accusamus molestiae.
                            In dolorum aperiam iusto alias, rem quis molestiae, ea sunt nemo fuga exercitationem, eius omnis repudiandae veniam assumenda cupiditate magni qui accusantium officiis ex quaerat commodi nam similique. Praesentium, reiciendis?
                        </p>
                        <a href="" class="product_instruction_link">Link for  instruction</a>
                    </div>
                </div>





            </div>
        </section>


        <section class="item_section item_form_section">
            <div class="container item_form_section_container">


                <div class="item_form_title_container">
                    <h3 class="item_form_title">
                        Fill the form
                    </h3>
                </div>

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


            </div>
        </section>

        <?php get_footer();?>

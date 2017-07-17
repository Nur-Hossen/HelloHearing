
<!--content-->
<div class="contact margin_top">

    <div class="container">
        <h1>Contact</h1>
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                </button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                </button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('warning')) { ?>
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                </button>
                <h4><i class="icon fa fa-warning"></i> Warning!</h4>
                <?php echo $this->session->flashdata('warning'); ?>
            </div>
        <?php } ?>


        <div class="contact-form">
            <div class="col-md-8 contact-grid">
                <?php echo form_open('ContactUs/send_mail','post')?>
                    <input type="text" name="name" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
                    <input type="text" name="from_email" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
                    <input type="text" name="subject" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
                    <textarea name="message" cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                    <div class="send">
                        <input type="submit" value="Send">
                    </div>
                <?php echo form_close()?>
            </div>
            <div class="col-md-4 contact-in">

                <div class="address-more">
                    <h4>Address</h4>
                    <p>Hello Hearing,</p>
                    <p>5 No. Mitford Tower, Room No.-15(1st Floor),</p>
                    <p> Mitford, Dhaka-1100.</p>
                    <p> Mobile: +8801977388255, +8801775152113</p>
                    <p> Email: info@hellohearingbd.com</p>
                </div>
                <div class="address-more">
                    <h4>Address1</h4>
                    <p>Tel:1115550001</p>
                    <p>Fax:190-4509-494</p>
                    <p>Email:<a href="mailto:contact@example.com"> contact@example.com</a></p>
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
        </div>
    </div>

</div>
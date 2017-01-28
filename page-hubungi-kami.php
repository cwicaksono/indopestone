<?php
/**
 * Template Name: Hubungi Kami
 *
 * @package Epic Base
 */

get_header();
?>

<section class="mbr-section mbr-section--relative mbr-parallax-background" id="msg-box5-79" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/background_contact.jpg);padding-top: 100px;">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(36, 36, 36);"></div>
    <div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 mbr-section__right">
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">HUBUNGI KAMI</h3>

                        </div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-article mbr-article--auto-align mbr-article--wysiwyg">
                            <p>
                                <strong>PT. Berkat Kasih Bersaudara</strong><br />
                                Jl. Rawamangun Muka Selatan 7 No. 29<br />Jakarta Timur 13220<br /><br />
                            </p>
                            <p>
                                <i class="fa fa-phone text-white icon-contact" aria-hidden="true"></i> 021 2983 4076<br />
                                <i class="fa fa-mobile text-white icon-contact" aria-hidden="true"></i> 0812 9797 4511, 0878 8081 3865<br />
                                <i class="fa fa-envelope-o text-white icon-contact" aria-hidden="true"></i> indopestone@yahoo.co.id<br />
                                <i class="fa fa-globe text-white icon-contact" aria-hidden="true"></i> www.indopestone.com
                                <br />
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mbr-box__magnet mbr-box__magnet--top-right mbr-section__right col-sm-6">
                    <figure class="mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom mbr-figure--full-width"><img class="mbr-figure__img" src="<?php echo get_template_directory_uri();?>/assets/images/indopestone-profile.png"></figure>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form1-89" style="background-color: rgb(239, 239, 239);">
    <div class="mbr-section__container mbr-section__container--std-padding container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">HUBUNGI KAMI</h2>
                        </div>
                        <div data-form-alert="true"></div>
                        <form action="https://indopestone.com" method="post" data-form-title="CONTACT FORM">
                            <input type="hidden" value="" data-form-email="true">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required="" placeholder="Nama Lengkap*" data-form-field="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required="" placeholder="Alamat Email*" data-form-field="Email">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Telepon" data-form-field="Phone">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Alamat Lengkap" rows="4" data-form-field="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Perihal" data-form-field="Perihal">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Deskripsi" rows="7" data-form-field="Deskripsi"></textarea>
                            </div>
                            <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-warning">CONTACT US</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>

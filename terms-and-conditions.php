<?php include('includes/header.php'); ?>
<?php
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://".$_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
?>
<base href="<?php echo $base_url; ?>index.php">

<div class="main main-content">
    <section class="section-common section-legal terms_conditions">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="legal-content">
                        <h1>Terms and Conditions</h1>
                        <ol>
                            <li>
                                <p><strong>The Site</strong> </p>
                                <p> You may buy, enrol for, access and complete a Course on the Site. The Site is owned and operated by Upskill Online Limited trading as Olive Media (referred to as “Olive” &#8220;we&#8221;, &#8220;our&#8221; or &#8220;us&#8221;).
                                    We care about your privacy. This Policy, which applies to the Site, (together with our Website Terms of Use and any other documents referred to in the Site) explains how we collect and use your information. Please read
                                    it carefully. For questions about this Policy, or if you want to enforce your rights: please contact Olive’s Privacy Officer, John King, at <a href="mailto:john.king@olivegroup.io">john.king@olivegroup.io</a>, or at
                                    <a href="tel:+353 87 8298186">+353 87 8298186</a>.</p>
                            </li>
                            <li>
                                <p><strong>The Site</strong> </p>
                                <p> You may buy, enrol for, access and complete a Course on the Site. The Site is owned and operated by Upskill Online Limited trading as Olive Media (referred to as “Olive” &#8220;we&#8221;, &#8220;our&#8221; or &#8220;us&#8221;).
                                    We care about your privacy. This Policy, which applies to the Site, (together with our Website Terms of Use and any other documents referred to in the Site) explains how we collect and use your information. Please read
                                    it carefully. For questions about this Policy, or if you want to enforce your rights: please contact Olive’s Privacy Officer, John King, at <a href="mailto:john.king@olivegroup.io">john.king@olivegroup.io</a>, or at
                                    <a href="tel:+353 87 8298186">+353 87 8298186</a>.</p>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include('includes/footer.php'); ?>
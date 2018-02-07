<?php include 'layouts/head.php'; ?>

<?php include 'layouts/main_menu.php'; ?>
<header id="contact">
    
</header>

<section id="contact-text">
    <div class="container">
    <h2>Contact Us</h2>
    </div>
</section>

<section id="contact-form">
        <div class="container">
           
            <h2>Got any questions?</h2>
            <form class="form-container container-fluid">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-info ">Send Message</button>
            </form>
        </div>
</section>

<?php include 'layouts/footer.php'; ?>
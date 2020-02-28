<!-- This file is used to markup the public-facing widget. -->

<p>
    <?php if (strlen(trim($phone)) > 0) : ?>
        <span class= "phone"></span>
    <?php echo $phone; ?>
    <?php endif; ?>
</p>


<p>
    <?php if (strlen(trim($email)) > 0) : ?>
        <span class= "email" ></span>
    <?php echo $email; ?>
    <?php endif; ?>
</p>


<p>
    <?php if (strlen(trim($social)) > 0) : ?>
        <span class= "social" ></span>
    <?php echo $social; ?>
    <?php endif; ?>
</p>
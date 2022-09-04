<?php
/* Template Name: Thankyou1 */
get_header();
?>

<!-- Thankyou Page  -->
<section class='thankyou-page'>
    <div class='container'>
        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
            <path
                d='M0 12.116l2.053-1.897c2.401 1.162 3.924 2.045 6.622 3.969 5.073-5.757 8.426-8.678 14.657-12.555l.668 1.536c-5.139 4.484-8.902 9.479-14.321 19.198-3.343-3.936-5.574-6.446-9.679-10.251z' />
        </svg>
        <h1>Thank You for Subscribe us.</h1>
        <span>Your subscription has successfully stored in our system.</span>
        <a href='<?php echo home_url(); ?>'>Go to Home Page</a>
    </div>
</section>
<!-- Thankyou Page End  -->

<?php get_footer();
?>
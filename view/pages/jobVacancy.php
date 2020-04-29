

<?php foreach ($jobVacancy as $key => $job) { ?>
    
    <div class="m-3 p-3 border border-warning rounded">
        <h1> <?php echo $job['job_Title'] ?> </h1>
        <p> <?php echo $job['job_discription'] ?> </p>
    </div>
    
<?php } ?>


<div class="my-5 py-5">

    <table id="example" class="table table-bordered table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Position</th>
                <th>Job Description</th>
                <th>Requirments</th>
                <th>Salary</th>
                <th width="65">Send</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jobVacancy as $key => $job) { ?>
                <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $job['position'] ?></td>
                    <td><?php echo $job['description'] ?></td>
                    <td><?php echo $job['requirments'] ?></td>
                    <td><?php echo $job['salary'] ?></td>
                    <td><a role='button'  href="mailto:Info@sahara-uae.com" type="button" class="btn btn-outline-success">Send CV</a></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Sl</th>
                <th>Position</th>
                <th>Job Description</th>
                <th>Requirments</th>
                <th>Salary</th>
                <th>Send</th>
            </tr>
        </tfoot>
    </table>
</div>

    
    

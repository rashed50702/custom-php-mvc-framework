<div class="row">
    <div class="col-sm-6 offset-sm-3">
        <h3>Contact Us:</h3>
        <p><?php echo $name ?></p>
        <form action="" method="post" class="form">
            <div class="form-group">
                <label for="Subject">Subject</label>
                <input type="text" name="subject" class="form-control">
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="Body">Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-sm btn-primary mt-2">Submit</button>
        </form>
    </div>
</div>
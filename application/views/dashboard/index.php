<form class="form-signin" method="post">
    <h4>Tweet now</h4>
    <textarea name='tweet' rows="3"></textarea> <br>
    <button class="btn btn-primary" type="Tweet">Sumbit</button>
</form>

<h2>My Tweets</h2>

<table class="table table-striped table-bordered">

    <thead>
    <tr>
        <th>Time</th>
        <th>Tweet</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($Tweets as $Tweet): ?>
    <tr>
        <td><?php echo $Tweet->created?></td>
        <td><?php echo $Tweet->content?></td>
    </tr>

        <? endforeach?>
    </tbody>
</table>
@include('inc.header')

<div class="container">

<form action="{url{'todo.store'}}" methode ="POST">

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div>
        <input type="checkbox" name="is_completed" id="is_completed">
        <label for="is_completed">Is Completed</label>
    </div>

    <button class="btn btn-primary" type="submit">Submit</button>
</form>
</div>
@include('inc.footer')
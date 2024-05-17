
@include('inc.header')
@include('inc.navbar')
<hr>
<div class="container">
    <h1>welcome to todo page</h1>
    <form action="{{url('todo')}}" method="POST">
        @csrf
        <div class="mb-3">
         <label for="topics">Topics</label>
         {{html()->multiselect('topics[]',$topics)->class('form-select')}}
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" value="1" name="completed" id="completed">
            <label class="form-check-label" for="completed">completed</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
@include('inc.footer')
<!--  @include('inc.header')
@include('inc.navbar')

<div class="container" style="border: 2px solid red; border-radius: 10px">
    <div class="container mt-3">

        <form action="{{url('todo')}}" method="POST">            

            <h1 style="text-align: center; padding: 10px; box-shadow: 0 0 20px gray; border-radius: 10px"> Todo Form</h1>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div>
                <input type="checkbox" name="is_completed" value="1" id="is_completed">
                <label for="is_completed">Is Completed</label>
            </div>

            <button class="btn btn-primary mb-3" type="submit">Submit</button>
        </form>
    </div>
</div>
@include('inc.footer')  -->

@include('inc.header')
@include('inc.navbar')
<hr>
<div class="container">
    <h1>welcome to todo page</h1>
    <form action="{{url('todo')}}" method="POST">
        @csrf
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
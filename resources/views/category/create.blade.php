<x-app-web-layout>

    <x-slot name="title">
        Add Workout
    </x-slot>

    <div class="container mt-5 text-light">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-warning fw-bold">{{session('status')}}</div>
                @endif

                <div class="card bg-dark text-light">
                    <div class="card-header">
                        <h4>Add Workout
                            <a href="{{url('categories')}}" class="btn btn-warning float-end">Back  to list</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('categories/create') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="text-light mb-1">Workout</label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-light mb-1">Weight</label>
                                <textarea name="description" class="form-control" rows="3">{{old('description')}}</textarea>
                                @error('description')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-light">Completed</label>
                                <input type="checkbox" name="is_active" {{old('is_active') == true ? checked : ''}}>
                                @error('is_active')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>

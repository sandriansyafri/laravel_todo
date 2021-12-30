<x-app-component>
  
      <div class="row justify-content-center mb-3">
            <div class="col col-md-6 text-center">
                  <h1 class="display-3">TODO</h1>
            </div>
      </div>

      <div class="row justify-content-center mb-4">
            <div class="col col-md-6">
                  <form action="{{ route('task.store') }}" method="POST">
                        @csrf
                        <div class="input-group">
                              <input type="text" class="form-control rounded-0 @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="New Task">
                              <button type="submit" class="btn btn-primary">Add Task</button>
                              @error('title')
                              <span class="invalid-feedback">
                                    {{ $message }}
                              </span>
                              @enderror
                        </div>
                       
                  </form>
            </div>
      </div>
      @if(session('status'))
      <div class="row justify-content-center">
            <div class="col col-md-6">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('status') }}</strong> Task!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
            </div>
      </div>
      @endif

      <div class="row justify-content-center">
            <div class="col col-md-6">
                  <ul class="list-group">
                       @forelse ($tasks as $task)
                       <li class="list-group-item d-flex justify-content-between align-items-center">
                              {{ $task->title }}
                        <div>
                              <a href="{{ route('task.edit',$task->id) }}" class="nav-link badge bg-success rounded-pill">
                                    {{ $task->desc ? 'edit' : 'add' }} Desc
                               </a>
                              <a href="{{ route('task.show',$task->id) }}" class="nav-link badge bg-primary rounded-pill">
                                   Detail
                              </a>
                          <form action="{{ route('task.destroy',$task->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('delete?')" type="submit" class="nav-link border-0 badge bg-danger rounded-pill">
                                    Delete
                              </button>
                          </form>
                        </div>
                      </li>
                      @empty
                      <li class="list-group-item border-0 text-center text-secondary">
                            (empty tasks)
                      </li>
                       @endforelse
                  </ul>
            </div>
      </div>

</x-app-component>
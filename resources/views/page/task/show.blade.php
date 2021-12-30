<x-app-component>
      <div class="row justify-content-center mb-3">
            <div class="col col-md-6 text-center">
                  <h1 class="display-4">DETAIL  TODO</h1>
            </div>
      </div>

      <div class="row justify-content-center">
            <div class="col col-md-6 p-0">
                  <div class="d-flex  justify-content-between mb-3 ">
                        <a href="{{ route('task.index') }}" class="btn btn-outline-primary px-4 d-inline-block">Back</a>
                        @if ($task->desc)
                        <a href="{{ route('task.edit',$task->id) }}" class="btn btn-outline-primary px-4 d-inline-block">Edit Desc</a>
                        @else 
                        <a href="{{ route('task.edit',$task->id) }}" class="btn btn-outline-primary px-4 d-inline-block">Add Desc</a>
                        @endif
                  </div>
                  <div class="card shadow-sm bg-body">
                        <div class="card-body">
                              <h5 class="mb-3">Title : {{ $task->title }}</h5>
                              <div>
                                    {!! $task->desc ?? 'empty' !!}
                              </div>
                        </div>
                  </div>
                  <div class="d-flex  justify-content-start mt-3 ">
                  
                  </div>
            </div>
      </div>

</x-app-component>
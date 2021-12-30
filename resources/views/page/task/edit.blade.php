<x-app-component>

      @push('after-style')
          <style>
                trix-toolbar [data-trix-button-group="file-tools"]{
                      display: none
                }
                trix-editor { 
                      min-height: 150px
                }
          </style>
      @endpush

      <div class="row justify-content-center">
            <div class="col col-md-8 text-center">
                  <h1 class="display-4">TODO </h1>
                  <h3 class="fst-italic fs-4 fw-light mb-0">{{ $task->title }}</h3>
            </div>
      </div>

      <div class="row justify-content-center ">
            <div class="col col-md-8">
                  <div class="card  border-0">
                      
                        <div class="card-body p-4 ">
                              <div class="d-flex  justify-content-end mb-3 ">
                                    <a href="{{ route('task.show',$task->id) }}" class="btn btn-outline-primary px-4 d-inline-block">Back</a>
                              </div>
                              <form action="{{ route('task.update',$task->id) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" value="{{ $task->title }}">
                                    <div class="mb-2">
                                          <input id="desc" type="hidden" name="desc" value="{!! $task->desc !!}">
                                          <trix-editor input="desc"></trix-editor>
                                    </div>
                                    @if ($task->desc)
                                          <button type="submit" class="btn btn-primary rounded-0 w-100">Update</button>
                                          @else
                                          <button type="submit" class="btn btn-primary rounded-0 w-100">Save</button>
                                          
                                    @endif
                              </form>
                        </div>
                  </div>
            </div>
      </div>

</x-app-component>
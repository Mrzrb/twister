                <div class="panel panel-default">
                    <div class="panel-heading"> <a href="{{ $twist->user->path() }}"> {{ $twist->user->name }} said : </div>
                    <a href="{{ $twist->path() }}">
                    <div class="panel-body">{{ $twist->body }}</div></a>
                          <div class="panel-footer">
                              {{ $twist->updated_at->diffForHumans() }}
                          </div>
                    
                </div>
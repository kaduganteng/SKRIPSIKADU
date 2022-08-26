@extends('layouts.app')
@section('styles')
@endsection
@section('content')
<div class="content-wrapper pb-5 pt-3">
    <section class="content pb-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12">
                <div class="card">
                            <div class="card-header bg-light">
                                <h3 class="card-title back-top" style="margin-top: 5px;">
                                    <a href="#" title="Kembali" data-toggle="tooltip" data-placement="right" class="btn text-muted">
                                        <i class="fa fa-arrow-left fa-fw"></i></span>
                                    </a>
                                </h3>
                                <div class="float-left offset-5 pt-1">
                                    <span class="d-none d-md-block d-lg-block">QUISIONER</span>
                                </div>
                                
                            </div> 
                            <div class="container-fluid row p-2" style="font-size: 14px;">
                            <select name="guru_id">
                            @if(!empty(@$data->guru_id))
                            <option value="{{@$data->guru_id}}" {{!empty($data->name)?'selected':''}}>{{$data->name}}</option>
                            @endif
                            @foreach($staff as $s)
                            <option value="{{$s->id}}">{{$s->name}}</option>
                            @endforeach
                            </select>
                            </div>

                    <div class="from-group">
                        <label for="quisioner">
                        bagaimana guru ini point 1
                         </label>
                        <div class="form-check">
                        <div>
                        <input type="radio" class="form-check-input" name="point1" id="point1" value="25">
                        <label for="point1" class="form-check-label">
                            cukup
                        </label>
                        </div>
                       <div>
                       <input type="radio" class="form-check-input" name="point1" id="point1" value="50">
                        <label for="point1" class="form-check-label">
                            baik
                        </label> 
                       </div>
                       <div>

                       <input type="radio" class="form-check-input" name="point1" id="point1" value="100">
                        <label for="point1" class="form-check-label">
                           sangat baik
                        </label> 
                       </div>
                    </div><div class="from-group">
                        <label for="quisioner">
                        bagaimana guru ini pint 2
                         </label>
                        <div class="form-check">
                        <div>
                        <input type="radio" class="form-check-input" name="point2" id="point2" value="25">
                        <label for="point2" class="form-check-label">
                            cukup
                        </label>
                        </div>
                       <div>
                       <input type="radio" class="form-check-input" name="point2" id="point2" value="50">
                        <label for="point2" class="form-check-label">
                            baik
                        </label> 
                       </div>
                       <div>

                       <input type="radio" class="form-check-input" name="point2" id="point2" value="100">
                        <label for="point2" class="form-check-label">
                           sangat baik
                        </label> 
                       </div>
                    </div><div class="from-group">
                        <label for="quisioner">
                        bagaimana guru ini point 3
                         </label>
                        <div class="form-check">
                        <div>
                        <input type="radio" class="form-check-input" name="point3" id="point3" value="25">
                        <label for="point3" class="form-check-label">
                            cukup
                        </label>
                        </div>
                       <div>
                       <input type="radio" class="form-check-input" name="point3" id="point3" value="50">
                        <label for="point3" class="form-check-label">
                            baik
                        </label> 
                       </div>
                       <div>

                       <input type="radio" class="form-check-input" name="point3" id="point3" value="100">
                        <label for="point3" class="form-check-label">
                           sangat baik
                        </label> 
                       </div>
                    </div><div class="from-group">
                        <label for="quisioner">
                        bagaimana guru ini point 4
                         </label>
                        <div class="form-check">
                        <div>
                        <input type="radio" class="form-check-input" name="point4" id="point4" value="25">
                        <label for="point4" class="form-check-label">
                            cukup
                        </label>
                        </div>
                       <div>
                       <input type="radio" class="form-check-input" name="point4" id="point4" value="50">
                        <label for="point4" class="form-check-label">
                            baik
                        </label> 
                       </div>
                       <div>

                       <input type="radio" class="form-check-input" name="point4" id="point4" value="100">
                        <label for="point4" class="form-check-label">
                           sangat baik
                        </label> 
                       </div>
                    </div><div class="from-group">
                        <label for="quisioner">
                        bagaimana guru ini point 5
                         </label>
                        <div class="form-check">
                        <div>
                        <input type="radio" class="form-check-input" name="point5" id="point5" value="25">
                        <label for="point5" class="form-check-label">
                            cukup
                        </label>
                        </div>
                       <div>
                       <input type="radio" class="form-check-input" name="point5" id="point5" value="50">
                        <label for="point5" class="form-check-label">
                            baik
                        </label> 
                       </div>
                       <div>

                       <input type="radio" class="form-check-input" name="point5" id="point5" value="100">
                        <label for="point5" class="form-check-label">
                           sangat baik
                        </label> 
                       </div>
                    </div>
                            </div>
                            </div>
                            <div class="card-footer p-2">
                                <button type="submit " class="btn btn-info   btn-sm">SELESAI</button>
                            </div>
                            </form>
                </div>

                </div>
            </div>
        </div>
    </section>
</div>

@endsection



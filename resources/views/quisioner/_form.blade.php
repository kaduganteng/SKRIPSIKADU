<div class="card">
    <div class="card-header bg-light">      
        <div class="container-fluid row p-2" style="font-size: 14px;">
       
<div>
 <label for="quisioner">
                           Semester
                        </label>
                        <div class="form-check">
                        <div>
                        <input type="radio" class="form-check-input" name="semester" id="semester" value="GENAP">
                            <label for="semester" class="form-check-label">
                            GENAP
                            </label>
                        </div>
                       <div>
                       <input type="radio" class="form-check-input" name="semester" id="semester" value="GANJIL">
                        <label for="semester" class="form-check-label">
                            GANJIL
                        </label> 

</div>
                       
                    <div class="from-group" style="align-center" > 
                    <div>
                    <label for="tgl_isi">Tanggal Pengisian</label>
                    <input type="date" name="tgl_isi" id="tgl_isi"> 
                    </div>
                       
                    <div class="body" >
                        <select name="guru_id">
                            @if(!empty(@$data->guru_id))
                            <option value="{{@$data->guru_id}}" {{!empty($data->name)?'selected':''}}>{{$data->name}}</option>
                            @endif
                            @foreach($staff as $s)
                            <option value="{{$s->id}}">{{$s->name}}</option>
                            @endforeach
                        </select>
                     </div>
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
                    </div>
                    <div class="from-group">
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
                    <div class="form-group row">
                <label class="col-md-4 col-xs-4 col-form-label justify-flex-end">Masukan <span class="text-danger">*</span></label> 
                <div class="col-12 col-md-5 col-lg-5">
                <textarea name="masukan" class="form-control @error('masukan') is-invalid @enderror" placeholder="Masukan saran anda..">{{ old('masukan', $quisioner->masukan ?? '') }}</textarea>
                @error('masukan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('masukan') }}</strong>
                </span>
                @enderror
                </div> 
                </div>
                        <div class="card-footer p-2">
                            <button type="submit " class="btn btn-info   btn-sm">SELESAI</button>
                         </div>
                           
                </div>
                
                
            </div>
        </div>
    </section>
</div>


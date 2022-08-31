<div class="card">
    <div class="card-header bg-light">      
        <div class="container-fluid row p-2" style="font-size: 14px;">      
                <div class="from-group" style="align-center" >            
                    <div class="body" ><label for="">Pilih Guru</label> 
                        <select name="guru_id"> 
                            @if(!empty(@$data->guru_id))
                            <option value="{{@$data->guru_id}}" {{!empty($data->name)?'selected':''}}>{{$data->name}}</option>
                            @endif
                            @foreach($staff as $s)
                            <option value="{{$s->id}}">{{$s->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="body" ><label for="">Pilih Kelas</label> 
                        <select name="posisi_id"> 
                            @if(!empty(@$data->posisi_id))
                            <option value="{{@$data->posisi_id}}" {{!empty($data->name)?'selected':''}}>{{$data->name}}</option>
                            @endif
                            @foreach($posisi as $p)
                            <option value="{{$p->id}}">{{$p->name}}</option>
                            @endforeach
                        </select>
                    </div>
                      
                    <div class="pertanyaan1">
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

                    <div class="pertanyaan2">
                        <label for="quisioner">
                            bagaimana guru ini point 2
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
                    </div>

                    <div class="pertanyaan1">
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
                    </div>

                    <div class="pertanyaan1">
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
                    </div>

                    <div class="pertanyaan1">
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


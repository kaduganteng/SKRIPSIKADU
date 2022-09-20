<div class="card-body">
    <div class="card card-solid">
        <div class="card-body pb-0 pt-3">
            <blockquote>
            <b>Keterangan!!</b><br>
            <small><cite title="Source Title">Inputan Yang Ditanda Bintang Merah (<span class="text-danger">*</span>) Harus Di Isi !!</cite></small>
            </blockquote>
        </div>
    </div>
<div class="form-group row">
    <label class="col-md-4 col-xs-4 col-form-label">Nama Guru<span class="text-danger">*</span></label> 
    <div class="col-12 col-md-5 col-lg-5">
        <input type="text" name="user_id" class="form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}" value="{{ old('user_id', $roles->user_id ?? '') }}" placeholder="Masukan Nama Guru" required>
        @if ($errors->has('user_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('user_id') }}</strong>
            </span>
        @endif
    </div> 
</div> 
<div class="form-group row">
    <label class="col-md-4 col-xs-4 col-form-label">Masukan Point <span class="text-danger">*</span></label> 
    <div class="col-12 col-md-5 col-lg-5">
       <div class="form-check">
            <div class="col-12 custom-control custom-checkbox custom-control-inline">
                <input type="radio" class="form-check-input" name="pointberkas" id="pointberkas" value="50">
                <label for="pointberkas" class="form-check-label">
                    50 ( > 5 file tidak terisi)
                </label>
            </div>
            <div class="col-12 custom-control custom-checkbox custom-control-inline">
                <input type="radio" class="form-check-input" name="pointberkas" id="pointberkas" value="75">
                <label for="pointberkas" class="form-check-label">
                    75 (2 s/d 5 file tidak terisi)
                </label>
            </div>
            <div class="col-12 custom-control custom-checkbox custom-control-inline">
                <input type="radio" class="form-check-input" name="pointberkas" id="pointberkas" value="85">
                <label for="pointberkas" class="form-check-label">
                    85 (1 file tidak terisi)
                </label> 
            </div>
            <div class="col-12 custom-control custom-checkbox custom-control-inline">
                <input type="radio" class="form-check-input" name="pointberkas" id="pointberkas" value="100">
                <label for="pointberkas" class="form-check-label">
                    100 (semua file lengkap)
                </label> 
            </div>
        </div>
        @if ($errors->has('pointberkas'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('pointberkas') }}</strong>
            </span>
        @endif
    </div> 
</div> 
</div>
<div class="card-footer">
<div class="offset-md-4">
    <div class="form-group mb-0">
        <button type="submit" class="btn btn-primary mr-1"><i class="fas fa-check-double mr-1"></i> Simpan</button> 
        <button type="reset" class="btn btn-secondary"><i class="fas fa-undo mr-1"></i> Reset</button>
    </div>
</div>
</div>
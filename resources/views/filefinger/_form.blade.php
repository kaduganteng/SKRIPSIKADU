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
    <label class="col-md-4 col-xs-4 col-form-label">Tanggal Absen <span class="text-danger">*</span></label> 
    <div class="col-12 col-md-5 col-lg-5">
        <input type="date" name="U" class="form-control{{ $errors->has('tanggal_absen') ? ' is-invalid' : '' }}" value="{{ old('tanggal_absen', $roles->tanggal_absen ?? '') }}" placeholder="Isi Tanggal Absensi" required>
        @if ($errors->has('tanggal_absen'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('tanggal_absen') }}</strong>
            </span>
        @endif
    </div> 
</div> 
<div class="form-group row">
    <label class="col-md-4 col-xs-4 col-form-label">Masukan File <span class="text-danger">*</span></label> 
    <div class="col-12 col-md-5 col-lg-5">
        <input type="file" name="file_finger" class="form-control{{ $errors->has('file_finger') ? ' is-invalid' : '' }}" value="{{ old('file_finger', $roles->file_finger ?? '') }}"  placeholder="Masukan File Fingerprint.." autocomplete="off">
        @if ($errors->has('file_finger'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('file_finger') }}</strong>
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
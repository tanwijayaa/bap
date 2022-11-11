<div class="form-group {{ $errors->has('email_dosen') ? 'has-error' : ''}}">
    <label for="email_dosen" class="control-label">{{ 'Email Dosen' }}</label>
    <input class="form-control" name="email_dosen" type="text" id="email_dosen" value="{{ isset($dosen->email_dosen) ? $dosen->email_dosen : ''}}" >
    {!! $errors->first('email_dosen', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_dosen') ? 'has-error' : ''}}">
    <label for="nama_dosen" class="control-label">{{ 'Nama Dosen' }}</label>
    <input class="form-control" name="nama_dosen" type="text" id="nama_dosen" value="{{ isset($dosen->nama_dosen) ? $dosen->nama_dosen : ''}}" >
    {!! $errors->first('nama_dosen', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

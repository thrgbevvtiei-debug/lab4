<div class="mb-3">
    <label for="code" class="form-label">Код країни (2 літери)</label>
    <input id="code" name="code" type="text" maxlength="2" class="form-control"
           value="{{ old('code', $country->code ?? '') }}">
    @error('code') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>

<div class="mb-3">
    <label for="name" class="form-label">Назва</label>
    <input id="name" name="name" type="text" class="form-control"
           value="{{ old('name', $country->name ?? '') }}">
    @error('name') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>

<div class="mb-3">
    <label for="capital" class="form-label">Столиця</label>
    <input id="capital" name="capital" type="text" class="form-control"
           value="{{ old('capital', $country->capital ?? '') }}">
    @error('capital') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>

<div class="mb-3">
    <label for="phone_code" class="form-label">Телефонний код (наприклад, +380)</label>
    <input id="phone_code" name="phone_code" type="text" class="form-control"
           value="{{ old('phone_code', $country->phone_code ?? '') }}">
    @error('phone_code') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>

<div class="mb-3">
    <label for="region" class="form-label">Регіон</label>
    <input id="region" name="region" type="text" class="form-control"
           value="{{ old('region', $country->region ?? '') }}">
    @error('region') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>

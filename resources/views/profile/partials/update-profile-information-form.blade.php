<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Informasi Profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Perbarui informasi profil dan alamat email akun Anda.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Alamat email Anda belum diverifikasi.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        <div>
            <x-input-label for="ttl" :value="__('Tanggal Lahir')" />
            <input id="ttl" name="ttl" type="date" class="mt-1 block w-full border border-gray-300 rounded-md" value="{{ old('ttl', $user->ttl ? \Carbon\Carbon::make($user->ttl)->format('Y-m-d') : '') }}" required autofocus autocomplete="{{ old('ttl') ? 'on' : 'off' }}" />
            <x-input-error class="mt-2" :messages="$errors->get('ttl')" />
        </div>

        <div>
            <x-input-label for="jenis_kelamin" :value="__('Gender')" />
                <select id="jenis_kelamin" name="jenis_kelamin" class="mt-1 block w-full border border-gray-300 rounded-md" required autofocus>
                    <option value="">Choose Gender</option>
                    <option value="Laki-laki" {{ old('jenis_kelamin', $user->jenis_kelamin) === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin', $user->jenis_kelamin) === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
        </div>

        <div>
            <x-input-label for="agama" :value="__('Agama')" />
                <select id="agama" name="agama" class="mt-1 block w-full border border-gray-300 rounded-md" required autofocus>
                    <option value="">Pilih Agama</option>
                    <option value="Islam" {{ old('agama', $user->agama) === 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ old('agama', $user->agama) === 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Katolik" {{ old('agama', $user->agama) === 'Katolik' ? 'selected' : '' }}>Katolik</option>
                    <option value="Hindu" {{ old('agama', $user->agama) === 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Buddha" {{ old('agama', $user->agama) === 'Buddha' ? 'selected' : '' }}>Buddha</option>
                    <option value="Konghucu" {{ old('agama', $user->agama) === 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    <option value="Lainnya" {{ old('agama', $user->agama) === 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
            <x-input-error class="mt-2" :messages="$errors->get('agama')" />
        </div>

        <div>
            <x-input-label for="kebangsaan" :value="__('Kebangsaan')" />
            <x-text-input id="kebangsaan" name="name" type="text" class="mt-1 block w-full" :value="old('kebangsaan', $user->kebangsaan)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('kebangsaan')" />
        </div>

        <div>
            <x-input-label for="spesialis" :value="__('Spesialisasi')" />
                <select id="spesialis" name="spesialis" class="mt-1 block w-full border border-gray-300 rounded-md" required autofocus>
                    <option value="">Pilih Spesialisasi</option>
                    <option value="Pertanian" {{ old('spesialis', $user->spesialis) === 'Pertanian' ? 'selected' : '' }}>Pertanian</option>
                    <option value="Perkebunan" {{ old('spesialis', $user->spesialis) === 'Perkebunan' ? 'selected' : '' }}>Perkebunan</option>
                    <option value="Perternakan" {{ old('spesialis', $user->spesialis) === 'Peternakan' ? 'selected' : '' }}>Peternakan</option>
                    <option value="Perikanan" {{ old('spesialis', $user->spesialis) === 'Perikanan' ? 'selected' : '' }}>Perikanan</option>
                </select>
            <x-input-error class="mt-2" :messages="$errors->get('spesialis')" />
        </div>

        <div>
            <x-input-label for="alamat" :value="__('Alamat')" />
            <textarea id="alamat" name="alamat" class="mt-1 block w-full border border-gray-300 rounded-md" required autofocus autocomplete="address">{{ old('alamat', $user->alamat) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
        </div>

        <div>
            <x-input-label for="no_hp" :value="__('Nomor Telepon')" />
            <x-text-input id="no_hp" name="no_hp" type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2" :value="old('no_hp', $user->no_hp)" required autofocus autocomplete="no_hp" />
            <x-input-error class="mt-2" :messages="$errors->get('no_hp')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Simpan') }}</x-primary-button> 

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Tersimpan.') }}</p>
            @endif
        </div>
    </form>
</section>

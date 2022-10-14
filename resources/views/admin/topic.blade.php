<x-admin.app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop') }}
        </h2>
    </x-slot>
    <div class="m-8 w-1/2">
      <x-form enctype="multipart/form-data" >
        @bind($form)
        <div>
           <x-auth-session-status class="mb-4 text-lg" :status="session('settings')" />
           <div class="text-xl" >トピックス</div>

           @foreach ($form as $f)
           <div class="mt-8"> 
            <div > {{ $f->name }} </div>
            <div class="m-4" >
            <input type="hidden" name='ids[]' value="{{ $f->id }}" />
            <x-form-input name="comment[{{ $f->id }}]" value="{{ $f['comment'] }}" label="説明" />
            <x-form-input name="url[{{ $f->id }}]" value="{{ $f['url'] }}" label="リンク先" />

              <div>
                <img src="{{ asset('storage/'.$f->file_name) }}" />
                <input name="file[{{ $f->id }}]" class="form-control
                block
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile" >
              </div>
</div>
            </div>
           @endforeach


        </div>
        <x-form-submit>登録</x-form-submit>
        @endbind
      </x-form>
    </div>
</x-admin.app-layout>


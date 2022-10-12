<x-admin.app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop') }}
        </h2>
    </x-slot>
    <div class="m-8 w-1/2">
      <x-form>
        @bind($form)
        <div>
           <x-auth-session-status class="mb-4 text-lg" :status="session('settings')" />
           <div class="text-xl" >商品登録</div>
            <x-form-input name="shop_name" label="会社名(店名)" />
            <x-form-input name="postal_code" placeholder="郵便番号(ハイフンなし)" label="郵便番号"  />
            <x-form-select name="pref_id" :options="$prefs" placeholder="都道府県を選択" label="都道府県" />
            <x-form-input name="addr01" placeholder="市区町村（例：大阪市北区）" label="市区町村" />
            <x-form-input name="addr02" placeholder="番地・ビル名（例：西梅田1丁目6-8）" label="番地・ビル名"  />
            <x-form-input name="phone_number" label="電話番号" placeholder="09011112223" />
            <x-form-input name="email01" label="送信元メールアドレス（From）"  />
            <x-form-input name="email02" label="問合せ受付メールアドレス（From, ReplyTo）"  />
            <x-form-input name="other_expense" label="商品代金以外の必要料金" />
            <x-form-input name="payment" label="お支払方法" />
            <x-form-input name="delivery_time" label="引き渡し時期" />
            <x-form-input name="refund" label="返品・交換について" />
            <x-form-input name="defective" label="不良品について" />
            <x-form-input name="delivery_fee" label="送料設定" />
            <x-form-input name="delivery_free_amount"  label="送料無料条件（合計金額）" />
        </div>
        <x-form-submit>登録</x-form-submit>
        @endbind
      </x-form>
    </div>
</x-admin.app-layout>


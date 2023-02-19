<x-action-section>
    <x-slot name="title">
        {{ __('حذف الحساب') }}
    </x-slot>

    <x-slot name="description">
        {{ __('احذف حسابك بشكل دائم.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('بمجرد حذف حسابك ، سيتم حذف جميع موارده وبياناته نهائيًا. قبل حذف حسابك ، يرجى تنزيل أي بيانات أو معلومات ترغب في الاحتفاظ بها.') }}
        </div>

        <div class="mt-5">
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('حذف الحساب') }}
            </x-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('حذف الحساب') }}
            </x-slot>

            <x-slot name="content">
                {{ __('هل انت متأكد انك تريد حذف حسابك؟ بمجرد حذف حسابك ، سيتم حذف جميع موارده وبياناته نهائيًا. الرجاء إدخال كلمة المرور الخاصة بك لتأكيد رغبتك في حذف حسابك بشكل دائم.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-input type="password" class="mt-1 block w-3/4"
                                autocomplete="current-password"
                                placeholder="{{ __('كلمة المرور') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('إلغاء') }}
                </x-secondary-button>

                <x-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('تاكبد الحذف') }}
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>

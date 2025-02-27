<x-action-section>
    <x-slot name="title">
        {{ __('Apagar Conta') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Apagar sua conta permanentemente') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Uma vez que a sua conta é apagada, todos os seus arquivos e dados serão deletado permanentemente. Antes de apagar a sua conta, por favor faça download de algumas informações que são inportantes pra ti.') }}
        </div>

        <div class="mt-5">
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Apagar Conta ') }}
            </x-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-dialog-modal wire:model.live="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Apagar Conta') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Tem certeza que deseja apagar a sua conta? Uma vez que prosseguir não terá mais volta. Certifique-se de fazer o backup dos seus arquivos.') }}

                <div class="wrap" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-input type="password" class="mt-1 block w-3/4"
                                autocomplete="current-password"
                                placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model="password"
                                wire:keydown.enter="deleteUser" />

                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ms-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Apagar Conta') }}
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form wire:submit.prevent="saveContact">

                <input type="text" wire:model="contact.email" />

                <livewire:input name="email" placeholder="email" label="Email" wire:model="contact.email" />
                <livewire:input name="name" placeholder="name" label="name" wire:model="contact.name" />
                <livewire:input name="message" placeholder="message" label="message" wire:model="contact.message" />

                <button type="submit">Save Contact</button>
            </form>
        </div>
    </div>
</div>

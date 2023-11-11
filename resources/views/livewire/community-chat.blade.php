<div class="chatbox-wrapper" wire:submit.prevent="submit">
    <form>
        @csrf
        <label for="plus"><i class="fa-solid fa-plus" id=""></i></label>
        <input type="file" name="file" id="plus" wire:model="file">
        <input type="text" placeholder="message" wire:model="text">
        <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-paper-plane"></i></button>
    </form>
</div>
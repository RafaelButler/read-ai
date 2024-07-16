@props(['conversation' => null])

<x-chat-layout>
    <livewire:chat-message :conversation-id="$conversation"/>
</x-chat-layout>

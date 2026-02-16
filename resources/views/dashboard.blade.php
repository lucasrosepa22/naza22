<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl bg-pink-50 dark:bg-pink-950 p-4">

        <div class="grid auto-rows-min gap-4 md:grid-cols-3">

            <div class="relative aspect-video overflow-hidden rounded-xl border border-pink-300 bg-pink-100 dark:border-pink-700 dark:bg-pink-900 shadow-md">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-pink-400/40 dark:stroke-pink-300/30" />
            </div>

            <div class="relative aspect-video overflow-hidden rounded-xl border border-pink-300 bg-pink-100 dark:border-pink-700 dark:bg-pink-900 shadow-md">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-pink-400/40 dark:stroke-pink-300/30" />
            </div>

            <div class="relative aspect-video overflow-hidden rounded-xl border border-pink-300 bg-pink-100 dark:border-pink-700 dark:bg-pink-900 shadow-md">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-pink-400/40 dark:stroke-pink-300/30" />
            </div>

        </div>

        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-pink-300 bg-pink-100 dark:border-pink-700 dark:bg-pink-900 shadow-md">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-pink-400/40 dark:stroke-pink-300/30" />
        </div>

    </div>
</x-layouts.app>


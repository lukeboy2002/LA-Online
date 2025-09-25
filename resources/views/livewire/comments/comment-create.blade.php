<div>
    @auth
        <div x-data="{
            focused: {{ $parentComment ? 'true' : 'false' }},
            isEdit: {{ $commentModel ? 'true' : 'false'}},
            showPreview: false,
            previewHtml: '',
            init() {
                if (this.isEdit || this.focused) {
                    this.$refs.input.focus();
                }

                $wire.on('commentCreated', () => {
                    this.focused = false;
                    this.showPreview = false;
                    this.previewHtml = '';
                })
            },
            updatePreview() {
                if (!this.showPreview) { return; }
                if (window.markdownit) {
                    const md = window.markdownit({ html: false, linkify: true, breaks: true });
                    this.previewHtml = md.render(this.$refs.input.value || '');
                } else {
                    this.previewHtml = '';
                }
            }
    }" class="mb-4">
            <div class="mb-2">
            <textarea x-ref="input" wire:model="comment" @click="focused = true" @input.debounce.150ms="updatePreview()"
                      id="comment"
                      name="comment"
                      class="bg-transparent text-sm text-primary-muted placeholder-primary-muted rounded-lg block w-full p-2.5 border border-secondary/30 focus:border-secondary focus:outline-none focus:ring-0"
                      :rows="isEdit || focused ? '4' : '2'"
                      placeholder="{{__('Leave a comment...')}}"
                      required
            ></textarea>
                <div class="flex items-center justify-between mt-1 text-xs text-primary-muted"
                     :class="isEdit || focused ? '' : 'hidden'">
                    <span><a href="https://www.markdownguide.org/basic-syntax/"
                             target="_blank" class="text-primary-muted underline hover:text-secondary">Markdown supported</a></span>
                    <button type="button" class="text-primary-muted underline hover:text-secondary focus:outline-none"
                            @click="showPreview = !showPreview; updatePreview()">
                        <span x-show="!showPreview">Preview</span>
                        <span x-show="showPreview">Hide preview</span>
                    </button>
                </div>
                <div x-show="showPreview"
                     class="mt-2 p-3 border border-secondary/30 rounded-lg bg-background/50 prose prose-sm max-w-none"
                     x-html="previewHtml"
                     x-cloak
                ></div>
                <x-form.error for="comment" class="mt-2"/>
            </div>
            <div class="flex justify-end space-x-2" :class="isEdit || focused ? '' : 'hidden'">
                <x-button.secondary
                        @click="focused = false; isEdit = false; showPreview = false; previewHtml = ''; $wire.dispatch('cancelEditing')"
                        type="button">
                    Cancel
                </x-button.secondary>
                <x-button.default wire:click="createComment" type="submit">
                    {{ __('Sent') }}
                </x-button.default>
            </div>
            <script>
                if (!window.markdownit) {
                    const s = document.createElement('script');
                    s.src = 'https://cdn.jsdelivr.net/npm/markdown-it@14.1.0/dist/markdown-it.min.js';
                    s.defer = true;
                    document.head.appendChild(s);
                }
            </script>
        </div>
    @else
        <div class="flex justify-end items-center space-x-1 rounded-lg p-4">
            <p class="text-primary text-xs">{{ __('Only registered users can leave a comment.') }}</p>
            <a href="{{route('login')}}"
               class="text-xs text-primary underline hover:text-secondary hover:underline focus:outline-none focus:text-secondary focus:underline">
                login
            </a>
        </div>
    @endauth
</div>
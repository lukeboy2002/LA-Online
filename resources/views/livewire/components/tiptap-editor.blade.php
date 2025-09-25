<div class="w-full max-w-none">
    <div class="border border-secondary/30 rounded-lg ">
        <!-- Toolbar -->
        <div class="flex items-center justify-between px-3 py-2 border-b border-secondary/30">
            <div class="flex flex-wrap items-center divide-secondary/30 sm:divide-x sm:rtl:divide-x-reverse">

                <!-- Heading Dropdown -->
                <div class="flex items-center space-x-1 rtl:space-x-reverse sm:pe-4">
                    <select id="heading_{{ $editorId }}"
                            class="text-sm font-medium text-gray-500 bg-transparent dark:text-gray-400 border-0 focus:ring-0">
                        <option value="paragraph">Normal</option>
                        <option value="heading" data-level="1">Heading 1</option>
                        <option value="heading" data-level="2">Heading 2</option>
                        <option value="heading" data-level="3">Heading 3</option>
                    </select>
                </div>

                <!-- Text Formatting -->
                <div class="flex items-center space-x-1 rtl:space-x-reverse sm:ps-4">
                    <button id="bold_{{ $editorId }}" data-tooltip-target="tooltip-bold" type="button"
                            class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <x-lucide-bold class="w-5 h-5" aria-hidden="true"/>
                        <span class="sr-only">Bold</span>
                    </button>
                    <div id="tooltip-bold" role="tooltip"
                         class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Toggle bold
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button id="italic_{{ $editorId }}" data-tooltip-target="tooltip-italic" type="button"
                            class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <x-lucide-italic class="w-5 h-5" aria-hidden="true"/>
                        <span class="sr-only">Italic</span>
                    </button>
                    <div id="tooltip-italic" role="tooltip"
                         class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Toggle italic
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button id="underline_{{ $editorId }}" data-tooltip-target="tooltip-underline" type="button"
                            class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <x-lucide-underline class="w-5 h-5" aria-hidden="true"/>
                        <span class="sr-only">Underline</span>
                    </button>
                    <div id="tooltip-underline" role="tooltip"
                         class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Toggle underline
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <button id="link_{{ $editorId }}" data-tooltip-target="tooltip-link" type="button"
                            class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <x-lucide-link class="w-5 h-5" aria-hidden="true"/>
                        <span class="sr-only">Link</span>
                    </button>
                    <div id="tooltip-link" role="tooltip"
                         class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Add link
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>

                <!-- Alignment -->
                <div class="flex items-center space-x-1 rtl:space-x-reverse sm:ps-4">
                    <button id="align_left_{{ $editorId }}" type="button" data-tooltip-target="tooltip-left-align"
                            class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <x-lucide-align-left class="w-5 h-5" aria-hidden="true"/>
                        <span class="sr-only">Align left</span>
                    </button>
                    <div id="tooltip-left-align" role="tooltip"
                         class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Align left
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button id="align_center_{{ $editorId }}" type="button" data-tooltip-target="tooltip-center-align"
                            class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <x-lucide-align-center class="w-5 h-5" aria-hidden="true"/>
                        <span class="sr-only">Align center</span>
                    </button>
                    <div id="tooltip-center-align" role="tooltip"
                         class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Align center
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button id="align_right_{{ $editorId }}" type="button" data-tooltip-target="tooltip-right-align"
                            class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <x-lucide-align-right class="w-5 h-5" aria-hidden="true"/>
                        <span class="sr-only">Align right</span>
                    </button>
                    <div id="tooltip-right-align" role="tooltip"
                         class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Align right
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>

                <!-- Lists & Quote -->

                <div class="flex items-center space-x-1 rtl:space-x-reverse sm:ps-4">

                    <button id="unordered_list_{{ $editorId }}" type="button" data-tooltip-target="tooltip-list"
                            class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <x-lucide-list class="w-5 h-5" aria-hidden="true"/>
                        <span class="sr-only">Toggle list</span>
                    </button>
                    <div id="tooltip-list" role="tooltip"
                         class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Toggle list
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button id="ordered_list_{{ $editorId }}" type="button" data-tooltip-target="tooltip-ordered-list"
                            class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <x-lucide-list-ordered class="w-5 h-5" aria-hidden="true"/>
                        <span class="sr-only">Toggle ordered list</span>
                    </button>
                    <div id="tooltip-ordered-list" role="tooltip"
                         class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Toggle ordered list
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button id="quote_{{ $editorId }}" type="button" data-tooltip-target="tooltip-blockquote-list"
                            class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <x-lucide-message-square-quote class="w-5 h-5" aria-hidden="true"/>
                        <span class="sr-only">Toggle blockquote</span>
                    </button>
                    <div id="tooltip-blockquote-list" role="tooltip"
                         class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Toggle blockquote
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>

                <!-- Image Upload -->
                @if($enableImageUpload)
                    <div class="flex items-center space-x-1 rtl:space-x-reverse sm:ps-4">
                        <button id="image_{{ $editorId }}" type="button" data-tooltip-target="tooltip-image"
                                class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24"
                                 fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z"
                                      clip-rule="evenodd"/>
                                <path fill-rule="evenodd"
                                      d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">Add image</span>
                        </button>
                        <div id="tooltip-image" role="tooltip"
                             class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                            Add image
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <input type="file" id="image_upload_{{ $editorId }}" accept="image/*" class="hidden">
                    </div>
                @endif

            </div>
        </div>

        <!-- Editor Content -->
        <div class="px-4 py-2 bg-background">
            <div id="editor_{{ $editorId }}"
                 class="block w-full px-0 text-sm text-primary bg-background border-0 focus:ring-0  placeholder-primary-muted"
                 style="min-height: 200px; outline: none; cursor: text;">
            </div>
        </div>
    </div>

    <!-- Hidden Input for Form Submission -->
    <input type="hidden" name="content" id="content_{{ $editorId }}" value="{{ $content }}">
</div>

@push('styles')
    <style>
        .ProseMirror {
            outline: none !important;
            padding: 12px;
            min-height: 200px;
            cursor: text;
        }

        .ProseMirror:focus {
            outline: none !important;
            border: none !important;
        }

        .ProseMirror.is-editor-empty:first-child::before {
            content: attr(data-placeholder);
            float: left;
            color: #9ca3af;
            pointer-events: none;
            height: 0;
        }

        .ProseMirror p.is-editor-empty:first-child::before {
            content: attr(data-placeholder);
            float: left;
            color: #9ca3af;
            pointer-events: none;
            height: 0;
        }

        .ProseMirror h1 {
            font-size: 2em;
            color: #ea580c;
            font-weight: bold;
            margin: 0.67em 0;
        }

        .ProseMirror h2 {
            font-size: 1.5em;
            font-weight: bold;
            margin: 0.75em 0;
        }

        .ProseMirror h3 {
            font-size: 1.17em;
            font-weight: bold;
            margin: 0.83em 0;
        }

        /*.ProseMirror blockquote {*/
        /*    border-left: 4px solid #e5e7eb;*/
        /*    margin: 1.5em 0;*/
        /*    padding: 0 1em;*/
        /*    font-style: italic;*/
        /*}*/

        .ProseMirror blockquote {
            border: none;
            margin: 1.5em 0;
            padding: 0 1em;
            font-style: italic;
            position: relative;
            quotes: none; /* Verwijdert standaard quotes */
        }

        .ProseMirror blockquote::before {
            content: '“'; /* Beginquote */
            font-size: 3em; /* Pas grootte van quote aan */
            color: #ea580c; /* Oranje kleur */
            position: absolute;
            left: -0.5em; /* Geeft ruimte aan de linkerzijde */
            top: 0; /* Plaats aan de bovenkant */
        }

        .ProseMirror blockquote::after {
            content: '”'; /* Eindquote */
            font-size: 3em; /* Pas grootte van quote aan */
            color: #ea580c; /* Oranje kleur */
            position: absolute;
            right: -0.5em; /* Geeft ruimte aan rechterzijde */
            bottom: 0; /* Plaats aan de onderkant */
        }

        .ProseMirror ul, .ProseMirror ol {
            padding-left: 1.5em;
            margin: 1em 0;
            list-style-position: outside; /* Zorgt ervoor dat bullets/nummers buiten de tekst zijn */
        }

        .ProseMirror ul li::marker {
            color: #ea580c; /* Oranje kleur voor bullets */
        }

        .ProseMirror ol li::marker {
            color: #ea580c; /* Oranje kleur voor nummers */
        }

        .ProseMirror img {
            max-width: 100%;
            height: auto;
            border-radius: 0.375rem;
        }

        .ProseMirror .is-active {
            background-color: #3b82f6 !important;
            color: white !important;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Wait a bit for app.js to load
            setTimeout(() => {
                initTiptapEditor_{{ str_replace('-', '_', $editorId) }}();
            }, 100);
        });

        // Livewire navigation support
        document.addEventListener('livewire:navigated', function () {
            setTimeout(() => {
                initTiptapEditor_{{ str_replace('-', '_', $editorId) }}();
            }, 100);
        });

        function initTiptapEditor_{{ str_replace('-', '_', $editorId) }}() {
            const editorId = '{{ $editorId }}';
            const editorElement = document.getElementById(`editor_${editorId}`);

            // Check if TipTap is loaded via NPM; retry a few times if not yet ready
            if (typeof window.TiptapEditor === 'undefined') {
                let retries = window.__tiptapRetries || 0;
                if (retries < 20) { // retry for ~2s total (with 100ms delays)
                    window.__tiptapRetries = retries + 1;
                    return setTimeout(() => initTiptapEditor_{{ str_replace('-', '_', $editorId) }}(), 100);
                }
                console.error('TipTap not loaded after waiting. Make sure npm dev/build is running and resources/js/app.js is included.');
                return;
            }

            // Check if element exists
            if (!editorElement) {
                console.error('Editor element not found:', `editor_${editorId}`);
                return;
            }

            // Check if editor already exists
            if (window[`editor_${editorId}`]) {
                console.log('Editor already exists, destroying first...');
                try {
                    window[`editor_${editorId}`].destroy();
                } catch (e) {
                    console.log('Error destroying editor:', e);
                }
                delete window[`editor_${editorId}`];
            }

            console.log('Initializing TipTap editor for:', editorId);

            try {
                const {Editor, StarterKit, TextAlign, Underline, Image, Link, Placeholder} = window.TiptapEditor;

                // Initialize TipTap Editor
                const editor = new Editor({
                    element: editorElement,
                    extensions: [
                        StarterKit.configure({
                            history: {
                                depth: 10,
                            },
                        }),
                        TextAlign.configure({
                            types: ['heading', 'paragraph'],
                        }),
                        // Underline,
                        Image.configure({
                            allowBase64: true,
                            HTMLAttributes: {
                                class: 'max-w-full h-auto rounded',
                            },
                        }),
                        // Link.configure({
                        //     openOnClick: false,
                        //     HTMLAttributes: {
                        //         class: 'text-secondary underline',
                        //     },
                        // }),
                        Placeholder.configure({
                            placeholder: {!! json_encode($placeholder) !!},
                            emptyEditorClass: 'is-editor-empty',
                        }),
                    ],
                    content: {!! json_encode($content ?: '<p></p>') !!},
                    editorProps: {
                        attributes: {
                            class: 'prose dark:prose-invert prose-sm focus:outline-none min-h-[200px] p-4 cursor-text',
                            style: 'outline: none !important;'
                        },
                    },
                    parseOptions: {
                        preserveWhitespace: 'full',
                    },
                    onUpdate: ({editor}) => {
                        const content = editor.getHTML();
                        const hiddenInput = document.getElementById(`content_${editorId}`);
                        if (hiddenInput) {
                            hiddenInput.value = content;
                        }

                    },
                    onCreate: ({editor}) => {
                        console.log('TipTap editor created successfully for:', editorId);
                        updateToolbarStates();

                        // Make editor immediately focusable
                        setTimeout(() => {
                            editor.view.focus();
                            console.log('Editor focused');
                        }, 200);
                    },
                    onFocus: ({editor}) => {
                        console.log('Editor focused');
                    },
                    onBlur: ({editor}) => {
                        console.log('Editor blurred');
                    },
                    onSelectionUpdate: ({editor}) => {
                        updateToolbarStates();
                    },
                    onTransaction: ({editor}) => {
                        updateToolbarStates();
                    }
                });

                // Store editor instance
                window[`editor_${editorId}`] = editor;

                // Setup event listeners
                setupEventListeners(editor, editorId);

                function updateToolbarStates() {
                    try {
                        // Update button active states
                        const buttons = {
                            [`bold_${editorId}`]: editor.isActive('bold'),
                            [`italic_${editorId}`]: editor.isActive('italic'),
                            [`underline_${editorId}`]: editor.isActive('underline'),
                            [`unordered_list_${editorId}`]: editor.isActive('bulletList'),
                            [`ordered_list_${editorId}`]: editor.isActive('orderedList'),
                            [`quote_${editorId}`]: editor.isActive('blockquote'),
                            [`align_left_${editorId}`]: editor.isActive({textAlign: 'left'}),
                            [`align_center_${editorId}`]: editor.isActive({textAlign: 'center'}),
                            [`align_right_${editorId}`]: editor.isActive({textAlign: 'right'}),
                        };

                        Object.keys(buttons).forEach(id => {
                            const button = document.getElementById(id);
                            if (button) {
                                if (buttons[id]) {
                                    button.classList.add('bg-secondary', 'text-white');
                                    button.classList.remove('text-gray-500', 'hover:text-gray-900', 'dark:text-gray-400');
                                } else {
                                    button.classList.remove('bg-secondary', 'text-white');
                                    button.classList.add('text-gray-500', 'hover:text-gray-900', 'dark:text-gray-400');
                                }
                            }
                        });

                        // Update heading dropdown
                        const headingSelect = document.getElementById(`heading_${editorId}`);
                        if (headingSelect) {
                            if (editor.isActive('heading', {level: 1})) {
                                headingSelect.selectedIndex = 1;
                            } else if (editor.isActive('heading', {level: 2})) {
                                headingSelect.selectedIndex = 2;
                            } else if (editor.isActive('heading', {level: 3})) {
                                headingSelect.selectedIndex = 3;
                            } else {
                                headingSelect.selectedIndex = 0;
                            }
                        }
                    } catch (e) {
                        console.log('Error updating toolbar states:', e);
                    }
                }

            } catch (error) {
                console.error('Error initializing TipTap editor:', error);
            }
        }

        function setupEventListeners(editor, editorId) {
            // Heading Dropdown
            const headingSelect = document.getElementById(`heading_${editorId}`);
            if (headingSelect) {
                headingSelect.addEventListener('change', function () {
                    const value = this.value;
                    const option = this.options[this.selectedIndex];

                    if (value === 'paragraph') {
                        editor.chain().focus().setParagraph().run();
                    } else if (value === 'heading') {
                        const level = parseInt(option.dataset.level);
                        editor.chain().focus().toggleHeading({level}).run();
                    }
                });
            }

            // Text Formatting Buttons
            const setupButton = (id, command) => {
                const button = document.getElementById(`${id}_${editorId}`);
                if (button) {
                    button.addEventListener('click', (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        console.log('Button clicked:', id);
                        command();
                        setTimeout(() => {
                            editor.view.focus();
                        }, 10);
                    });
                }
            };

            setupButton('bold', () => editor.chain().focus().toggleBold().run());
            setupButton('italic', () => editor.chain().focus().toggleItalic().run());
            setupButton('underline', () => editor.chain().focus().toggleUnderline().run());

            // Link Button
            setupButton('link', () => {
                const url = prompt('Enter URL:');
                if (url) {
                    editor.chain().focus().extendMarkRange('link').setLink({href: url}).run();
                }
            });

            // Alignment Buttons
            setupButton('align_left', () => editor.chain().focus().setTextAlign('left').run());
            setupButton('align_center', () => editor.chain().focus().setTextAlign('center').run());
            setupButton('align_right', () => editor.chain().focus().setTextAlign('right').run());

            // List Buttons
            setupButton('unordered_list', () => editor.chain().focus().toggleBulletList().run());
            setupButton('ordered_list', () => editor.chain().focus().toggleOrderedList().run());
            setupButton('quote', () => editor.chain().focus().toggleBlockquote().run());

            @if($enableImageUpload)
            // Image Upload
            setupButton('image', () => {
                const fileInput = document.getElementById(`image_upload_${editorId}`);
                if (fileInput) {
                    fileInput.click();
                }
            });

            const imageUpload = document.getElementById(`image_upload_${editorId}`);
            if (imageUpload) {
                imageUpload.addEventListener('change', function (e) {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            const src = e.target.result;
                            editor.chain().focus().setImage({src}).run();
                        };
                        reader.readAsDataURL(file);

                        // Reset file input
                        this.value = '';
                    }
                });
            }

            // Listen for image upload events from Livewire
            if (typeof window.Livewire !== 'undefined') {
                window.Livewire.on('image-uploaded', (event) => {
                    const {url, alt} = event;
                    editor.chain().focus().setImage({src: url, alt}).run();
                });

                window.Livewire.on('image-upload-error', (event) => {
                    alert('Image upload failed: ' + event.message);
                });
            }
            @endif

            // Direct click on editor area
            const editorElement = document.getElementById(`editor_${editorId}`);
            if (editorElement) {
                editorElement.addEventListener('click', function () {
                    console.log('Editor clicked');
                    editor.view.focus();
                });
            }
        }
    </script>
@endpush
<div class="w-full max-w-none">
    <div class="border border-gray-200 rounded-lg bg-white dark:bg-gray-800 dark:border-gray-700">
        <!-- Toolbar -->
        <div class="flex items-center justify-between px-3 py-2 border-b border-gray-200 dark:border-gray-700">
            <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x sm:rtl:divide-x-reverse dark:divide-gray-600">

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
                    <button type="button" id="bold_{{ $editorId }}"
                            class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11.8 10.5c0-2.5-1.4-3.8-4.1-3.8H4v10.6h4.2c2.3 0 3.8-1.2 3.8-3.6 0-1.5-.8-2.6-2.2-2.9v-.1c1.2-.3 2-1.3 2-2.7zM6.7 8.9h1.3c1.1 0 1.8.6 1.8 1.6s-.7 1.6-1.8 1.6H6.7V8.9zm0 5.1v-2.3h1.5c1.2 0 1.9.6 1.9 1.7s-.7 1.7-1.9 1.7H6.7z"/>
                        </svg>
                    </button>
                    <button type="button" id="italic_{{ $editorId }}"
                            class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8.5 3.5h3v1h-1.4l-2.1 11h1.4v1h-3v-1h1.4l2.1-11H8.5v-1z"/>
                        </svg>
                    </button>
                    <button type="button" id="underline_{{ $editorId }}"
                            class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6 2v6.5c0 2.5 1.3 4 3.5 4s3.5-1.5 3.5-4V2h1v6.5c0 3.3-2 5.5-5.5 5.5S3 11.8 3 8.5V2h1zm-3 15h8v1H3v-1z"/>
                        </svg>
                    </button>
                    <button type="button" id="link_{{ $editorId }}"
                            class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"/>
                        </svg>
                    </button>
                </div>

                <!-- Alignment -->
                <div class="flex items-center space-x-1 rtl:space-x-reverse sm:ps-4">
                    <button type="button" id="align_left_{{ $editorId }}"
                            class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11 2H9v16h2V2zM7 8H5v4h2V8zM15 6h-2v8h2V6z"/>
                        </svg>
                    </button>
                    <button type="button" id="align_center_{{ $editorId }}"
                            class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2H8v16h2V2zM6 8H4v4h2V8zM14 6h-2v8h2V6zM16 10h-1v2h1v-2zM5 10H4v2h1v-2z"/>
                        </svg>
                    </button>
                    <button type="button" id="align_right_{{ $editorId }}"
                            class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2h2v16H9V2zM13 8h2v4h-2V8zM5 6h2v8H5V6z"/>
                        </svg>
                    </button>
                </div>

                <!-- Lists -->
                <div class="flex items-center space-x-1 rtl:space-x-reverse sm:ps-4">
                    <button type="button" id="unordered_list_{{ $editorId }}"
                            class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 100 2 1 1 0 000-2zM6 4h11v2H6V4zM3 9a1 1 0 100 2 1 1 0 000-2zM6 9h11v2H6V9zM3 14a1 1 0 100 2 1 1 0 000-2zM6 14h11v2H6v-2z"/>
                        </svg>
                    </button>
                    <button type="button" id="ordered_list_{{ $editorId }}"
                            class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3v2h1V3h1V2H2v1zM2 7v2h1V7h1V6H2v1zM2 11v2h1v-2h1v-1H2v1zM6 4h11v2H6V4zM6 9h11v2H6V9zM6 14h11v2H6v-2z"/>
                        </svg>
                    </button>
                    <button type="button" id="quote_{{ $editorId }}"
                            class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 17V7a1 1 0 011-1h12a1 1 0 011 1v10a1 1 0 01-1 1H4a1 1 0 01-1-1zM4 8v8h12V8H4z"/>
                        </svg>
                    </button>
                </div>

                <!-- Image Upload -->
                @if($enableImageUpload)
                    <div class="flex items-center space-x-1 rtl:space-x-reverse sm:ps-4">
                        <button type="button" id="image_{{ $editorId }}"
                                class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"/>
                            </svg>
                        </button>
                        <input type="file" id="image_upload_{{ $editorId }}" accept="image/*" class="hidden">
                    </div>
                @endif

            </div>
        </div>

        <!-- Editor Content -->
        <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
            <div id="editor_{{ $editorId }}"
                 class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
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

        .ProseMirror blockquote {
            border-left: 4px solid #e5e7eb;
            margin: 1.5em 0;
            padding: 0 1em;
            font-style: italic;
        }

        .ProseMirror ul, .ProseMirror ol {
            padding-left: 1.5em;
            margin: 1em 0;
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
                        Underline,
                        Image.configure({
                            allowBase64: true,
                            HTMLAttributes: {
                                class: 'max-w-full h-auto rounded',
                            },
                        }),
                        Link.configure({
                            openOnClick: false,
                            HTMLAttributes: {
                                class: 'text-blue-600 underline',
                            },
                        }),
                        Placeholder.configure({
                            placeholder: {!! json_encode($placeholder) !!},
                            emptyEditorClass: 'is-editor-empty',
                        }),
                    ],
                    content: {!! json_encode($content ?: '<p></p>') !!},
                    editorProps: {
                        attributes: {
                            class: 'prose prose-sm focus:outline-none min-h-[200px] p-4 cursor-text',
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
                                    button.classList.add('bg-blue-500', 'text-white');
                                    button.classList.remove('text-gray-500', 'hover:text-gray-900', 'dark:text-gray-400');
                                } else {
                                    button.classList.remove('bg-blue-500', 'text-white');
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
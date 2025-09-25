import './bootstrap';
import 'flowbite';
import './apperance.js'

import {Editor} from '@tiptap/core'
import StarterKit from '@tiptap/starter-kit'
import TextAlign from '@tiptap/extension-text-align'
import Underline from '@tiptap/extension-underline'
import Image from '@tiptap/extension-image'
import Link from '@tiptap/extension-link'
import Placeholder from '@tiptap/extension-placeholder'

// Maak TipTap globaal beschikbaar
window.TiptapEditor = {
    Editor,
    StarterKit,
    TextAlign,
    Underline,
    Image,
    Link,
    Placeholder
}

// initialize components based on data attribute selectors
// onMounted(() => {
//     initFlowbite();
// })
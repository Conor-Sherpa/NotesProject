window.Vue = require('vue').default;

import toolbartop from "./components/toolbartop";
import timeline from "./components/timeline";
import createnote from "./components/createnote";
import note from "./components/note";

const app = new Vue({
    el: '#app',
    components: { toolbartop, timeline, createnote, note },
});

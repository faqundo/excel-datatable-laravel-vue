import Vue from 'vue';
import Vuetify from 'vuetify';

import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify);

export default new Vuetify({
    icons: {
        iconfont: 'mdi', // 'mdiSvg' || 'mdiSvg' || 'md' || 'fa' || 'fa4' || 'faSvg'
      },
});


<template>
    <nav class="pagination">
        <ul>
            <li>
                <a class="button {{isOnFirstPage ? disabledClass : ''}}" @click="loadPage('prev')">
                    <span class="icon">
                        <i class="fa fa-angle-left"></i>
                    </span>
                </a>
            </li>
            <template v-for="n in totalPage">
                <li>
                    <a class="button {{isCurrentPage(n+1) ? ' is-primary' : ''}}" @click="loadPage(n+1)"> {{ n+1 }}</a>
                </li>
            </template>
            <li>
                <a class="button {{isOnLastPage ? disabledClass : ''}}" @click="loadPage('next')">
                    <span class="icon">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
import PaginationMixin from 'vuetable/src/components/VuetablePaginationMixin.vue'

export default {
    mixins: [PaginationMixin],

    props: {
        'disabledClass': {
            type: String,
            default: function() {
                return 'is-disabled'
            }
        },
    },

    methods: {
        loadPage: function(page) {
            this.$dispatch('vuetable-pagination:change-page', page)
        },
    },
}
</script>
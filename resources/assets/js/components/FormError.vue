<template>
	<span class="help is-danger">
		<slot></slot>
	</span>
</template>

<script>
	export default {
		props: ['errors'],
	}
</script>
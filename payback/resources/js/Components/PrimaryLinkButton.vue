<!--
    usage as link: <PrimaryLinkButton href="/dein-pfad">Speichern</PrimaryLinkButton>
    usage with router: <PrimaryLinkButton :to="{ name: 'deine.route' }" as="router-link">Speichern</PrimaryLinkButton>
-->
<template>
  <component
    :is="as"
    :href="href"
    :to="to"
    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150"
  >
    <slot />
  </component>
</template>

<script>
export default {
  name: 'PrimaryLinkButton',
  props: {
    href: {
      type: String,
      default: '#',
    },
    to: {
      type: [String, Object],
      default: '',
    },
    as: {
      type: String,
      default: 'a',
    },
  },
};
</script>

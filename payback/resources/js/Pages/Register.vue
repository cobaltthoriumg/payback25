<!--
  Register.vue - User registration component
  This component handles user registration in the application.
  It uses Vue 3's Composition API with the <script setup> syntax.
-->
<script setup>
  // Import necessary components and functions
  import GuestLayout from '@/Layouts/GuestLayout.vue'; // Layout for guest users (not logged in)
  import InputError from '@/Components/InputError.vue'; // Component for displaying form validation errors
  import InputLabel from '@/Components/InputLabel.vue'; // Component for form labels
  import PrimaryButton from '@/Components/PrimaryButton.vue'; // Primary button component
  import TextInput from '@/Components/TextInput.vue'; // Text input component
  import { Head, Link, useForm } from '@inertiajs/vue3'; // Inertia.js components and form helper

  // Initialize form state using Inertia's useForm
  // This creates a reactive form object with validation and submission capabilities
  const form = useForm({
    name: '', // User's name
    email: '', // User's email address
    password: '', // User's password
    password_confirmation: '', // Password confirmation field
  });

  // Form submission handler
  const submit = () => {
    // Submit the form to the 'register' route
    // The onFinish callback resets the password fields after submission
    form.post(route('register'), {
      onFinish: () => form.reset('password', 'password_confirmation'),
    });
  };
</script>

<template>
  <!--
    GuestLayout provides the basic layout structure for guest pages
    It includes common elements like headers, footers, and navigation
  -->
  <GuestLayout>
    <!--
      Head component is used to manage the document head
      Here it sets the page title to "Register"
    -->
    <Head title="Register" />

    <!--
      Form element with submit.prevent modifier to prevent default form submission
      The submit handler is called when the form is submitted
    -->
    <form @submit.prevent="submit">
      <!-- Name field section -->
      <div>
        <!--
          InputLabel component creates a label for the name input field
          The 'for' attribute connects the label to the input field
        -->
        <InputLabel for="name" value="Name" />

        <!--
          TextInput component creates a text input field
          v-model binds the input value to form.name
          Various attributes control the input behavior and appearance
        -->
        <TextInput
          id="name"
          type="text"
          class="mt-1 block w-full"
          v-model="form.name"
          required
          autofocus
          autocomplete="name"
        />

        <!--
          InputError component displays validation errors for the name field
          The :message prop binds to form.errors.name
        -->
        <InputError class="mt-2" :message="form.errors.name" />
      </div>

      <!-- Email field section -->
      <div class="mt-4">
        <InputLabel for="email" value="Email" />

        <TextInput
          id="email"
          type="email"
          class="mt-1 block w-full"
          v-model="form.email"
          required
          autocomplete="username"
        />

        <InputError class="mt-2" :message="form.errors.email" />
      </div>

      <!-- Password field section -->
      <div class="mt-4">
        <InputLabel for="password" value="Password" />

        <TextInput
          id="password"
          type="password"
          class="mt-1 block w-full"
          v-model="form.password"
          required
          autocomplete="new-password"
        />

        <InputError class="mt-2" :message="form.errors.password" />
      </div>

      <!-- Password confirmation field section -->
      <div class="mt-4">
        <InputLabel
          for="password_confirmation"
          value="Confirm Password"
        />

        <TextInput
          id="password_confirmation"
          type="password"
          class="mt-1 block w-full"
          v-model="form.password_confirmation"
          required
          autocomplete="new-password"
        />

        <InputError
          class="mt-2"
          :message="form.errors.password_confirmation"
        />
      </div>

      <!-- Form actions section -->
      <div class="mt-4 flex items-center justify-end">
        <!--
          Link component creates a navigation link
          The :href prop binds to the 'login' route
          Various classes control the link's appearance and behavior
        -->
        <Link
          :href="route('login')"
          class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
        >
          Already registered?
        </Link>

        <!--
          PrimaryButton component creates a primary action button
          The :class prop conditionally applies the 'opacity-25' class when form is processing
          The :disabled prop disables the button when form is processing
        -->
        <PrimaryButton
          class="ms-4"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          Register
        </PrimaryButton>
      </div>
    </form>
  </GuestLayout>
</template>
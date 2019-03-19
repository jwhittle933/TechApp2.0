<template>
  <div class="form-group mb-5">
    <form class="container form" action method="POST">
      <input type="hidden" name="_token" :value="csrf">
      <input type="hidden" name="_method" value="patch">
      <h1 class="display-4 mt-5">Edit Your Information</h1>
      <p class="mb-5">*Click the field to update your information</p>
      <h3 class="mt-3">User ID: {{ Id }}</h3>
      <input type="hidden" name="id" :value="userid">

      <!-- Name Field -->
      <label for="name" class="lead">Name:</label>
      <div v-if="nameEdit === true" class="d-flex mb-3">
        <input name="name" class="form-control w-50" v-model="userName" required>
        <button
          id="name"
          class="btn btn-sm btn-outline-success ml-2"
          @click.prevent="update('name', userName)"
        >Save</button>
        <button class="btn btn-sm btn-outline-danger ml-2" @click.prevent="closeEdit('name')">Cancel</button>
      </div>
      <p id="name" v-else class="border-left pl-2 w-25" @click="editField('name')">{{ userName }}</p>

      <!-- Email Field -->
      <label for="email" class="lead">Email:</label>
      <div v-if="emailEdit === true" class="d-flex mb-3">
        <input name="email" type="email" class="form-control w-50" v-model="userEmail" required>
        <button
          id="email"
          class="btn btn-sm btn-outline-success ml-2"
          @click.prevent="update('email', userEmail)"
        >Save</button>
        <button
          class="btn btn-sm btn-outline-danger ml-2"
          @click.prevent="closeEdit('email')"
        >Cancel</button>
      </div>
      <p id="email" class="border-left pl-2 w-25" @click="editField('email')" v-else>{{ userEmail }}</p>

      <!-- Phone Field -->
      <label class="lead">Phone:</label>
      <br>
      <div class="border-left pl-2 ml-2">
        <label for="primaryphone">Primary:</label>
        <div class="d-flex ml-2 mb-2" v-if="primaryphoneEdit">
          <input name="primaryphone" type="tel" class="form-control w-50" v-model="userPrPhone">
          <button
            id="primaryphone"
            class="btn btn-sm btn-outline-success ml-2"
            @click.prevent="update('primaryphone', userPrPhone)"
          >Save</button>
          <button
            class="btn btn-sm btn-outline-danger ml-2"
            @click.prevent="closeEdit('primaryphone')"
          >Cancel</button>
        </div>
        <p
          id="primaryphone"
          class="w-25"
          v-else
          @click="editField('primaryphone')"
        >{{ userPrPhone }}</p>

        <label for="alternatephone">Secondary:</label>
        <div class="d-flex ml-2" v-if="alternatephoneEdit">
          <input name="alternatephone" type="tel" class="form-control w-50" v-model="userSecPhone">
          <button
            id="alternatephone"
            class="btn btn-sm btn-outline-success ml-2"
            @click.prevent="update('alternatephone', userSecPhone)"
          >Save</button>
          <button
            class="btn btn-sm btn-outline-danger ml-2"
            @click.prevent="closeEdit('alternatephone')"
          >Cancel</button>
        </div>
        <p
          id="alternatephone"
          class="w-25"
          v-else
          @click="editField('alternatephone')"
        >{{ userSecPhone }}</p>
      </div>

      <!-- Address Field -->
      <label class="lead mt-2">Address:</label>
      <div class="border-left pl-2 ml-2">
        <label for="streetaddress" class="mt-2">Street:</label>
        <div v-if="streetaddressEdit" class="d-flex ml-2">
          <input name="streetaddress" type="text" class="form-control w-50" v-model="userStreet">
          <button
            id="streetaddress"
            class="btn btn-sm btn-outline-success ml-2"
            @click.prevent="update('streetaddress', userStreet)"
          >Save</button>
          <button
            class="btn btn-sm btn-outline-danger ml-2"
            @click.prevent="closeEdit('streetaddress')"
          >Cancel</button>
        </div>
        <p id="street" v-else @click="editField('streetaddress')">{{ userStreet }}</p>

        <label for="city" class="mt-2">City:</label>
        <div v-if="cityEdit" class="d-flex ml-2">
          <input name="city" type="text" class="form-control w-50" v-model="userCity">
          <button
            id="city"
            class="btn btn-sm btn-outline-success ml-2"
            @click.prevent="update('city', userCity)"
          >Save</button>
          <button
            class="btn btn-sm btn-outline-danger ml-2"
            @click.prevent="closeEdit('city')"
          >Cancel</button>
        </div>
        <p id="city" v-else @click="editField('city')">{{ userCity }}</p>

        <label for="state" class="mt-2">State:</label>
        <div v-if="stateEdit" class="d-flex ml-2">
          <input name="state" type="text" class="form-control w-50" v-model="userState">
          <button
            id="state"
            class="btn btn-sm btn-outline-success ml-2"
            @click.prevent="update('state', userState)"
          >Save</button>
          <button
            class="btn btn-sm btn-outline-danger ml-2"
            @click.prevent="closeEdit('state')"
          >Cancel</button>
        </div>
        <p id="state" v-else @click="editField('state')">{{ userState }}</p>
      </div>
      <br>

      <!-- Password Field -->
      <div class="alert alert-warning alert-dismissible fade show w-75" role="alert" v-if="error">
        <strong>Uh oh!</strong> The passwords don't match.
        <button
          type="button"
          class="close"
          data-dismiss="alert"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <h3 class="mb-4">Change Your Password</h3>
      <div class="ml-2">
        <label for="password" class="lead">New Password:</label>
        <transition name="reveal">
          <button
            v-if="reveal"
            class="btn btn-success btn-sm ml-3"
            @click.prevent="hidePassword"
          >Hide Password</button>
        </transition>
        <transition name="conceal">
          <button
            v-if="conceal"
            class="btn btn-danger btn-sm ml-3"
            @click.prevent="showPassword"
          >Show Password</button>
        </transition>
        <input
          id="password"
          name="password"
          :type="type"
          class="form-control w-75"
          v-model="userPassword"
          required
        >
        <br>
        <label for="pwcheck" class="lead">Re-type Password:</label>
        <input
          name="pwcheck"
          class="form-control mb-4 w-75"
          :type="type"
          v-model="pwcheck"
          @input="check"
          required
        >
        <button
          class="btn btn-outline-success ml-2"
          @click.prevent="update('password', userPassword)"
        >Update</button>
      </div>
      <hr>
      <p class="lead">Administrator: {{ admin }}</p>
    </form>
  </div>
</template>

<script>
export default {
  name: "Edit",
  props: [
    "userid",
    "name",
    "email",
    "administrator",
    "streetaddress",
    "city",
    "state",
    "primaryphone",
    "alternatephone"
  ],
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      Id: this.userid,
      userName: this.name,
      userEmail: this.email,
      admin: this.administrator,
      userStreet:
        this.streetaddress === ""
          ? "Add your street address"
          : this.streetaddress,
      userCity: this.city === "" ? "Add your city" : this.city,
      userState: this.state === "" ? "Add your state" : this.state,
      userPrPhone:
        this.primaryphone === "" ? "Add a primary number" : this.primaryphone,
      userSecPhone:
        this.alternatephone === ""
          ? "Add a secondary number"
          : this.alternatephone,
      userPassword: "",
      pwcheck: "",
      error: false,
      reveal: false,
      conceal: true,
      type: "password",
      nameEdit: false,
      nameSuccess: false,
      emailEdit: false,
      emailSuccess: false,
      pwEdit: false,
      pwSuccess: false,
      primaryphoneEdit: false,
      prPhoneSuccess: false,
      alternatephoneEdit: false,
      secPhoneSuccess: false,
      streetaddressEdit: false,
      streetSuccess: false,
      cityEdit: false,
      citySuccess: false,
      stateEdit: false,
      stateSucces: false,
      submitSuccess: false,
      initalClass: "border-left pl-2 w-25",
      successClass: "border-left border-success pl-2 w-25"
    };
  },
  methods: {
    check() {
      this.userPassword === this.pwcheck
        ? (this.error = false)
        : (this.error = true);
    },
    showPassword() {
      this.reveal = true;
      this.conceal = false;
      this.type = "text";
    },
    hidePassword() {
      this.conceal = true;
      this.reveal = false;
      this.type = "password";
    },
    editField(field) {
      //works, but fails on phone numbers; rename properties
      let property = field.toString() + "Edit";
      this[property] = true;
    },
    closeEdit(field) {
      //works, but fails on phone numbers; rename properties
      let property = field.toString() + "Edit";
      this[property] = false;
    },
    update(column, value) {
      axios
        .patch("/api/userprofile/" + this.Id, {
          userID: this.Id,
          columnName: column,
          columnValue: value
        })
        .then(response => {
          let property = column.toString() + "Success";
          this[property] = true;
          console.log(response.data);
        })
        .catch(e => console.error(e.message));
      this.closeEdit(column);
    }
  }
};
</script>

<style scoped>
.reveal-enter,
.conceal-enter {
  position: absolute;
  transform: translateY(-110%);
  opacity: 0;
}
.reveal-enter-active,
.conceal-enter-active {
  position: absolute;
  transition: all 150ms;
}
.reveal-leave-to,
.conceal-leave-to {
  position: absolute;
  transform: translateY(110%);
  opacity: 0;
}
.reveal-leave-active,
.conceal-leave-active {
  position: absolute;
  transition: all 150ms;
}
</style>

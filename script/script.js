document.addEventListener("DOMContentLoaded", (e) => {
  const scrollToBooking = () => {
    document.querySelector("form.booking-form").scrollIntoView({
      behavior: "smooth",
      block: "center",
    })
    setTimeout(() => {
      document.querySelector("input#email").focus()
    }, 1000)
  }

  const scrollToAboutUs = () => {
    document.querySelector(".about-us-text").scrollIntoView({
      behavior: "smooth",
      block: "center"
    })
  }

  const scrollToContactInfo = () => {
    document.querySelector(".contact-info-text").scrollIntoView({
      behavior: "smooth",
      block: "center"
    })
  }
  
  const scrollToOffers = () => {
    document.querySelector(".offers-list").scrollIntoView({
      behavior: "smooth",
      block: "center"
    })
  }
  
  const scrollToAboutQuests = () => {
    document.querySelector(".quests-description").scrollIntoView({
      behavior: "smooth",
      block: "center"
    })
  }

  document.querySelector(".header-offer > button").addEventListener("click", scrollToBooking)
  document.querySelector(".menu-item.item-booking").addEventListener("click", scrollToBooking)
  document.querySelector(".menu-item.item-offers").addEventListener("click", scrollToOffers)
  document.querySelector(".menu-item.item-about-quests").addEventListener("click", scrollToAboutQuests)
  document.querySelector(".menu-item.item-contact-us").addEventListener("click", scrollToContactInfo)
  document.querySelector(".menu-item.item-about-us").addEventListener("click", scrollToAboutUs)
})
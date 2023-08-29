const txtsDesktop = document.querySelector(".animate-text-desktop").children,
				txtsDesktopLen = txtsDesktop.length;
let indexDesktop = 0;
const textDesktopInTimer = 3000,
textDesktopOutTimer = 2800;

function animateTextDesktop() {
				for (let i = 0; i < txtsDesktopLen; i++) {
					txtsDesktop[i].classList.remove("text-in", "text-out");
				}
				txtsDesktop[indexDesktop].classList.add("text-in");

				setTimeout(function () {
					txtsDesktop[indexDesktop].classList.add("text-out");
				}, textDesktopOutTimer);

				setTimeout(function () {
					if (indexDesktop == txtsDesktopLen - 1) {
						indexDesktop = 0;
					} else {
						indexDesktop++;
					}
					animateTextDesktop();
				}, textDesktopInTimer);
}

const txtsTablet = document.querySelector(".animate-text-tablet").children,
				txtsTabletLen = txtsTablet.length;
let indexTablet = 0;
const textTabletInTimer = 3000,
textTabletOutTimer = 2800;

function animateTextTablet() {
				for (let i = 0; i < txtsTabletLen; i++) {
					txtsTablet[i].classList.remove("text-in", "text-out");
				}
				txtsTablet[indexTablet].classList.add("text-in");

				setTimeout(function () {
					txtsTablet[indexTablet].classList.add("text-out");
				}, textTabletOutTimer);

				setTimeout(function () {
					if (indexTablet == txtsTabletLen - 1) {
						indexTablet = 0;
					} else {
						indexTablet++;
					}
					animateTextTablet();
				}, textTabletInTimer);
}


const txtsPhone = document.querySelector(".animate-text-phone").children,
				txtsPhoneLen = txtsPhone.length;
let indexPhone = 0;
const textPhoneInTimer = 3000,
textPhoneOutTimer = 2800;

function animateTextPhone() {
				for (let i = 0; i < txtsPhoneLen; i++) {
					txtsPhone[i].classList.remove("text-in", "text-out");
				}
				txtsPhone[indexPhone].classList.add("text-in");

				setTimeout(function () {
					txtsPhone[indexPhone].classList.add("text-out");
				}, textPhoneOutTimer);

				setTimeout(function () {
					if (indexPhone == txtsPhoneLen - 1) {
						indexPhone = 0;
					} else {
						indexPhone++;
					}
					animateTextPhone();
				}, textPhoneInTimer);
}
animateTextPhone();
animateTextTablet();
animateTextDesktop();
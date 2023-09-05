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
animateTextDesktop();
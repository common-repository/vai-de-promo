<?php if (!defined('ABSPATH')) exit; ?>

<div class="wp-vdp">

	<div class="header-wp-vdp">

		<div class="box-header-wp">
			<?php if (is_array($data) && count($data) >= 1) { ?>
				<small>Passagens aéreas saindo de <br class="mobile-pl-vdp"><small class="bold-vdp"><?php echo esc_html($item['departure_ap_city']) ?></small></small>
			<?php } else { ?>
				<small>Passagens aéreas</small>
			<?php } ?>
		</div>

		<div class="box-header-wp">
			<a href="https://www.vaidepromo.com.br/?<?php echo esc_html($utm_params_str) ?>" style="cursor:pointer" target="_blank">
				<svg width="165" height="20.837916" viewBox="0 0 408 51" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M180.992 17.2559C180.106 16.4789 179.659 15.4885 179.659 14.2905C179.659 13.0925 180.112 12.0546 181.017 11.2777C181.923 10.5008 183.071 10.1094 184.467 10.1094C185.864 10.1094 187.011 10.5008 187.917 11.2777C188.822 12.0546 189.275 13.0569 189.275 14.2905C189.275 15.5241 188.829 16.4789 187.942 17.2559C187.056 18.0328 185.896 18.4242 184.467 18.4242C183.039 18.4242 181.885 18.0328 180.992 17.2559Z" fill="#515050"></path>
					<path d="M267.733 10.1924C272.331 10.1924 275.959 11.3489 278.618 13.6619C281.277 15.9749 282.603 19.1537 282.603 23.1925C282.603 27.2313 281.271 30.4932 278.618 32.8536C275.959 35.22 272.331 36.4002 267.733 36.4002H261.05V46.1621H257.888C253.979 46.1621 250.816 43.1434 250.816 39.413V10.1865H267.733V10.1924ZM267.14 28.1269C268.683 28.1269 269.908 27.7058 270.807 26.8696C271.706 26.0274 272.152 24.8768 272.152 23.4001C272.152 21.9234 271.699 20.7135 270.807 19.8535C269.908 18.9995 268.69 18.5666 267.14 18.5666H260.942V28.1269H267.14Z" fill="#515050"></path>
					<path d="M285.25 41.7911V20.7846H289.248C292.016 20.7846 294.171 23.0205 293.871 25.5825V25.6181H294.031C294.585 24.0406 295.542 22.7477 296.907 21.7394C298.271 20.7312 299.891 20.2212 301.772 20.2212C302.512 20.2212 303.258 20.2983 304.01 20.4525C304.762 20.6067 305.343 20.7668 305.751 20.9388L303.321 28.8029C302.218 28.4589 301.243 28.2869 300.395 28.2869C298.845 28.2869 297.614 28.7258 296.69 29.5976C295.771 30.4694 295.306 31.7979 295.306 33.583V46.1739H289.962C287.361 46.1739 285.25 44.2108 285.25 41.7911Z" fill="#515050"></path>
					<path d="M312.051 45.142C310.023 44.0804 308.461 42.5622 307.377 40.5932C306.286 38.6242 305.744 36.3171 305.744 33.678C305.744 31.0388 306.312 28.6013 307.453 26.5612C308.594 24.521 310.227 22.9553 312.35 21.8581C314.48 20.7609 316.961 20.2153 319.798 20.2153C322.636 20.2153 324.861 20.7491 326.876 21.8107C328.891 22.8723 330.441 24.3905 331.531 26.3595C332.622 28.3285 333.164 30.6356 333.164 33.2747C333.164 35.9139 332.596 38.3573 331.455 40.3915C330.313 42.4317 328.694 43.9974 326.583 45.0946C324.472 46.1917 321.998 46.7374 319.161 46.7374C316.323 46.7374 314.085 46.2036 312.057 45.142H312.051ZM322.916 37.7168C323.809 36.7086 324.255 35.3623 324.255 33.6839C324.255 31.8691 323.828 30.422 322.967 29.3427C322.107 28.2633 320.991 27.7236 319.601 27.7236C318.115 27.7236 316.922 28.2277 316.011 29.2418C315.105 30.2501 314.652 31.5963 314.652 33.2747C314.652 35.0895 315.08 36.5366 315.94 37.616C316.795 38.6954 317.936 39.235 319.358 39.235C320.78 39.235 322.03 38.7309 322.923 37.7168H322.916Z" fill="#515050"></path>
					<path d="M386.396 45.142C384.368 44.0804 382.806 42.5622 381.722 40.5932C380.631 38.6242 380.089 36.3171 380.089 33.678C380.089 31.0388 380.657 28.6013 381.798 26.5612C382.94 24.521 384.572 22.9553 386.696 21.8581C388.825 20.7609 391.306 20.2153 394.143 20.2153C396.981 20.2153 399.207 20.7491 401.222 21.8107C403.237 22.8723 404.786 24.3905 405.876 26.3595C406.967 28.3285 407.509 30.6356 407.509 33.2747C407.509 35.9139 406.941 38.3573 405.8 40.3915C404.658 42.4317 403.039 43.9974 400.928 45.0946C398.818 46.1917 396.343 46.7374 393.506 46.7374C390.668 46.7374 388.43 46.2036 386.402 45.142H386.396ZM397.262 37.7168C398.154 36.7086 398.601 35.3623 398.601 33.6839C398.601 31.8691 398.173 30.422 397.313 29.3427C396.452 28.2633 395.336 27.7236 393.946 27.7236C392.46 27.7236 391.268 28.2277 390.356 29.2418C389.45 30.2501 388.997 31.5963 388.997 33.2747C388.997 35.0895 389.425 36.5366 390.286 37.616C391.14 38.6954 392.281 39.235 393.703 39.235C395.125 39.235 396.375 38.7309 397.268 37.7168H397.262Z" fill="#515050"></path>
					<path d="M374.714 23.1214C376.423 25.0548 377.284 27.688 377.284 31.0092V46.168H372.195C369.849 46.168 367.942 44.2643 367.942 41.9098V31.9344C367.942 30.7364 367.661 29.8171 367.094 29.1825C366.526 28.548 365.716 28.2336 364.658 28.2336C363.599 28.2336 362.688 28.5776 362.037 29.2596C361.387 29.9476 361.062 30.8728 361.062 32.0352V46.168H356.706C354.009 46.168 351.822 43.9796 351.822 41.2752V31.9284C351.822 30.6949 351.541 29.746 350.974 29.0758C350.406 28.4056 349.596 28.0735 348.538 28.0735C347.479 28.0735 346.567 28.4353 345.917 29.1529C345.267 29.8705 344.941 30.8313 344.941 32.0293V46.1621H340.121C337.621 46.1621 335.6 44.1338 335.6 41.637V20.7787H339.483C342.002 20.7787 343.896 23.0798 343.417 25.5589L343.405 25.6122H343.558C345.101 22.0123 347.715 20.2153 351.414 20.2153C353.295 20.2153 354.895 20.672 356.215 21.5794C357.535 22.4868 358.428 23.7144 358.913 25.2564C359.697 23.5069 360.864 22.2318 362.407 21.4252C363.95 20.6186 365.691 20.2153 367.642 20.2153C370.652 20.2153 373.018 21.182 374.727 23.1214H374.714Z" fill="#515050"></path>
					<path d="M129.233 46.1976L115.472 14.4328C114.579 12.3689 116.212 10.1152 118.609 10.1152H124.068C124.112 10.1152 125.42 10.1389 125.432 10.1805L134.054 33.0018C135.048 30.1728 141.157 16.3009 143.166 11.4733C143.504 10.6549 144.352 10.1212 145.296 10.1212H154.006L138.377 46.2035H129.233V46.1976Z" fill="#515050"></path>
					<path d="M172.683 22.6647C175.004 24.2482 176.165 26.7687 176.165 30.2382V46.0494H172.052C169.979 46.0494 168.328 44.4125 168.5 42.491C168.532 42.1529 168.564 41.8149 168.602 41.465H168.436C167.703 42.9951 166.517 44.2168 164.872 45.1361C163.227 46.0553 161.345 46.512 159.222 46.512C156.442 46.512 154.14 45.7707 152.316 44.2939C150.486 42.8172 149.574 40.8363 149.574 38.3514C149.574 35.7359 150.588 33.6958 152.616 32.2309C154.644 30.766 157.264 30.0365 160.485 30.0365C161.798 30.0365 163.08 30.1492 164.323 30.3687C165.567 30.5881 166.644 30.9202 167.556 31.365V30.855C167.556 29.2893 167.027 28.1506 165.969 27.4389C164.91 26.7272 163.354 26.3654 161.307 26.3654C160.089 26.3654 158.808 26.4781 157.462 26.7094C154.943 27.1424 152.488 25.7071 151.825 23.406L151.487 22.2318C153.349 21.5497 155.141 21.0575 156.863 20.755C158.578 20.4466 160.427 20.2983 162.398 20.2983C166.931 20.2983 170.356 21.0871 172.677 22.6706L172.683 22.6647ZM165.803 39.2113C166.861 38.4641 167.505 37.4262 167.722 36.0977C166.989 35.7241 166.115 35.4275 165.089 35.2081C164.062 34.9887 163.131 34.876 162.289 34.876C161.008 34.876 159.994 35.1132 159.248 35.5877C158.495 36.0621 158.125 36.7619 158.125 37.6812C158.125 38.5293 158.489 39.1876 159.222 39.6443C159.955 40.1009 160.867 40.3322 161.964 40.3322C163.463 40.3322 164.744 39.9586 165.803 39.2113Z" fill="#515050"></path>
					<path d="M188.899 46.0433H180.291V23.6846C180.291 21.7808 181.91 20.2329 183.912 20.2329H188.899V46.0433Z" fill="#515050"></path>
					<path d="M199.618 45.2429C198.056 44.3355 196.832 43.0307 195.952 41.3286C195.072 39.6265 194.632 37.6338 194.632 35.3505C194.632 33.0672 195.085 31.1456 195.996 29.4139C196.908 27.688 198.171 26.3358 199.778 25.3691C201.385 24.4024 203.196 23.9161 205.198 23.9161C208.138 23.9161 211.453 25.6004 212.18 26.9763C212.18 26.9763 212.168 23.8271 212.168 21.099V18.62C212.168 16.8111 213.692 15.3403 215.566 15.3403H219.367V46.1147H216.172C214.368 46.1147 212.926 44.6498 213.016 42.9062C213.016 42.7994 213.028 42.6986 213.035 42.5978H212.901C212.231 43.7424 211.166 44.6913 209.713 45.4564C208.252 46.2155 206.658 46.601 204.93 46.601C202.953 46.601 201.187 46.1443 199.625 45.2369L199.618 45.2429ZM210.892 39.3537C211.861 38.3277 212.353 36.9933 212.353 35.3505C212.353 33.6246 211.881 32.2369 210.937 31.199C209.993 30.1611 208.75 29.6392 207.2 29.6392C205.651 29.6392 204.267 30.1611 203.234 31.199C202.201 32.2369 201.684 33.5653 201.684 35.1785C201.684 36.8806 202.188 38.2565 203.189 39.3122C204.19 40.3678 205.498 40.8957 207.111 40.8957C208.724 40.8957 209.923 40.3856 210.892 39.3596V39.3537Z" fill="#515050"></path>
					<path d="M245.485 34.8878L229.499 38.0963C229.971 39.2943 230.838 40.1305 232.113 40.605C233.389 41.0853 234.715 41.1862 236.099 40.9074C237.527 40.6228 238.796 40.1068 239.906 39.3714C241.181 38.5233 242.909 38.5945 244.07 39.5671L245.849 41.0616C244.949 42.3189 243.706 43.3983 242.125 44.282C240.543 45.1716 238.809 45.8003 236.928 46.1798C234.524 46.6602 232.279 46.678 230.194 46.2273C228.109 45.7765 226.317 44.8335 224.818 43.3924C223.326 41.9512 222.3 40.0475 221.751 37.6693C221.209 35.3207 221.311 33.1916 222.057 31.2878C222.81 29.3841 224.021 27.8125 225.705 26.573C227.382 25.3394 229.32 24.4972 231.508 24.0583C233.663 23.6254 235.684 23.6432 237.565 24.0998C239.446 24.5624 241.053 25.4758 242.386 26.8458C243.719 28.2098 244.637 29.9831 245.141 32.1597C245.351 33.0789 245.466 33.9804 245.479 34.8818L245.485 34.8878ZM229.422 30.8905C228.689 31.7742 228.421 32.901 228.613 34.271L237.993 32.391C237.712 31.0388 237.055 30.0958 236.035 29.5679C235.008 29.0401 233.835 28.9096 232.509 29.1706C231.182 29.4375 230.156 30.0128 229.429 30.8905H229.422Z" fill="#515050"></path>
					<path d="M31.2511 35.7571L27.9728 33.2112C27.9728 33.2112 27.3106 32.1963 30.6449 32.0922C31.2045 32.0748 31.89 32.1182 32.6128 32.2006L34.2682 27.8894L26.0002 6.34663C24.4706 2.39545 24.0416 -0.059397 16.986 0.118428H2.93551C1.00023 0.118428 -0.328814 2.07884 0.366018 3.90045L19.1778 52.9063C21.6167 51.6876 24.1629 49.9353 26.5132 48.0964L31.2511 35.7571Z" fill="url(#paint0_linear_1480_4122)"></path>
					<path d="M31.2516 35.7573L26.5137 48.101C31.7599 44.0023 36.0501 39.483 36.0501 39.483L31.2516 35.7573Z" fill="url(#paint1_linear_1480_4122)"></path>
					<path d="M61.3107 0.118652H49.4892C46.7425 0.118652 44.2757 1.82317 43.287 4.40813L32.6174 32.2052C35.2568 32.4958 38.4885 33.2678 38.6704 33.3025C39.7942 33.515 40.4844 33.2764 41.2772 32.5695C43.329 30.7522 46.2762 28.0848 48.8644 25.8902C49.1815 25.6257 49.4939 25.3611 49.8157 25.1008C49.8157 25.1008 49.8157 25.1052 49.8203 25.1095C50.0442 24.923 50.2587 24.7495 50.4732 24.5761C50.8043 24.3115 51.1307 24.0426 51.4618 23.7823C51.5831 23.6869 51.6996 23.5958 51.8209 23.5048C51.8582 23.4787 51.8909 23.4527 51.9282 23.4224C52.0121 23.3573 52.1007 23.2922 52.1846 23.2315C52.2313 23.1968 52.2826 23.1621 52.3292 23.1274C52.4038 23.0754 52.4784 23.019 52.553 22.9669C52.609 22.9279 52.6649 22.8889 52.7209 22.8498C52.7909 22.8021 52.8608 22.7544 52.9308 22.7067C52.9914 22.6677 53.052 22.6286 53.108 22.5896C53.1779 22.5462 53.2432 22.5029 53.3132 22.4595C53.3738 22.4205 53.4391 22.3814 53.4997 22.3467C53.5696 22.3034 53.6349 22.2643 53.7049 22.2253C53.7702 22.1863 53.8354 22.1516 53.8961 22.1125C53.966 22.0735 54.0313 22.0345 54.1013 21.9998C54.1665 21.9651 54.2365 21.926 54.3018 21.8913C54.3717 21.8566 54.437 21.8219 54.507 21.7872C54.5769 21.7525 54.6422 21.7178 54.7121 21.6875C54.7821 21.6528 54.8521 21.6224 54.922 21.5921C54.992 21.5617 55.0619 21.527 55.1365 21.4966C55.2064 21.4663 55.2764 21.4403 55.3464 21.4099C55.421 21.3795 55.4909 21.3535 55.5655 21.3232C55.6355 21.2971 55.7054 21.2711 55.78 21.2494C55.8546 21.2234 55.9293 21.1974 56.0039 21.1714C56.0738 21.1497 56.1484 21.128 56.2231 21.1063C56.2977 21.0846 56.3769 21.0629 56.4516 21.0412C56.5262 21.0195 56.6008 21.0065 56.6754 20.9848C56.7547 20.9675 56.8293 20.9458 56.9086 20.9328C56.9879 20.9155 57.0625 20.9025 57.1417 20.8894C57.221 20.8764 57.2956 20.8591 57.3749 20.8461C57.4588 20.8331 57.5428 20.8244 57.6267 20.8157C57.7013 20.807 57.7759 20.794 57.8552 20.7897C58.4288 20.7376 59.0537 20.7463 59.7066 20.7984C60.8211 20.9285 61.5392 21.3448 61.3947 22.247C61.3947 23.6913 55.7381 29.0043 54.8707 29.8414C53.0007 31.6457 47.7078 36.7549 41.6176 42.6274C41.2352 42.9961 40.8621 43.3734 40.4657 43.7377C35.4061 48.4089 32.179 53.5007 31.5635 58.2196H39.7569C41.7295 58.2196 43.4969 56.9965 44.2104 55.1402L47.2089 47.3246C48.6592 43.7768 49.2514 42.6968 54.3344 42.6968C62.3973 42.6968 77.3758 42.0506 80.4489 27.868C85.7092 3.57973 66.8974 0.122987 61.3061 0.122987L61.3107 0.118652Z" fill="url(#paint2_linear_1480_4122)"></path>
					<defs>
						<linearGradient id="paint0_linear_1480_4122" x1="11.1009" y1="12.3536" x2="38.9934" y2="58.9256" gradientUnits="userSpaceOnUse">
							<stop offset="0.06" stop-color="#F1BF75"></stop>
							<stop offset="0.72" stop-color="#F08260"></stop>
						</linearGradient>
						<linearGradient id="paint1_linear_1480_4122" x1="27.852" y1="41.2525" x2="45.4475" y2="54.6084" gradientUnits="userSpaceOnUse">
							<stop offset="1" stop-color="#1697D4"></stop>
							<stop offset="1" stop-color="#31BCB4"></stop>
						</linearGradient>
						<linearGradient id="paint2_linear_1480_4122" x1="26.0841" y1="15.6631" x2="93.869" y2="61.069" gradientUnits="userSpaceOnUse">
							<stop offset="1" stop-color="#0F98D6"></stop>
							<stop offset="1" stop-color="#00C7BB"></stop>
						</linearGradient>
					</defs>
				</svg>
			</a>
		</div>
	</div>

	<?php if (is_array($data) && count($data) >= 1) { ?>

		<div class="body-wp-vdp">

			<?php
			foreach ($data as $item) {
				$date_dp = isset($item['departure_date']) ? new DateTime($item['departure_date']) : '';
				$item['departure_date'] = isset($item['departure_date']) ? $date_dp->format('d') . ' ' . $this->transform_month_pt_br($date_dp->format('m')) : '';

				$date_rt = isset($item['returning_date']) ? new DateTime($item['returning_date']) : '';
				$item['returning_date'] = isset($item['returning_date']) ? $date_rt->format('d') . ' ' . $this->transform_month_pt_br($date_rt->format('m')) : '';

				$sc_attr['img_path'] = $vai_de_promo_public_path . 'assets/cia/' . $item['lowest_company_code'] . '.png';
				$item['ecommerce_url'] = 'https://www.vaidepromo.com.br' . $item['ecommerce_url'] . '?' . ($utm_params_str);
			?>
				<div class="body-item-wp-vdp">

					<small class="arrival-vdp"><?php echo esc_html($item['arrival_ap_city']) ?></small>

					<div class="logo-cia-box">
						<img class="cia-logo-vdp" src="<?php echo esc_attr($sc_attr['img_path']) ?>" alt="<?php echo esc_attr($item['lowest_company']) ?>" title="<?php echo esc_attr($item['lowest_company']) ?>">
						<small class="cia-title-vdp"><?php echo esc_attr($item['lowest_company']) ?></small>
					</div>

					<div>
						<small class="price-vdp">A partir de <b>R$<?php echo esc_html(round($item['price_w_fees'])) ?></b></small>
					</div>

					<div>
						<a class="buy-vdp" href="<?php echo esc_attr($item['ecommerce_url']) ?>" target="_blank" <?php if ($_SERVER["SERVER_NAME"] != "www.vaidepromo.com.br") { ?> rel="sponsored" <?php } ?> style="cursor:pointer">Comprar</a>
					</div>

				</div>
			<?php } ?>

		</div>

		<div class="footer-wp-vdp">
			<small class="text-footer-vdp">Não encontrou o destino que buscava?</small>
			<a class="cta-vdp" href="https://www.vaidepromo.com.br/?<?php echo esc_html($utm_params_str) ?>" style="cursor:pointer" target="_blank">Pesquise mais promos</a>
		</div>

	<?php } else { ?>

		<div class="body-wp-vdp">

			<div class="body-item-wp-error-vdp">
				<div class="body-item-body-vdp">
					<small class="error-vdp-msg">Passagens aéreas até 40% mais baratas</small>
				</div>
				<div class="body-item-button-vdp">
					<a class="cta-vdp" href="https://www.vaidepromo.com.br/?<?php echo esc_html($utm_params_str) ?>" style="cursor:pointer" target="_blank">Pesquise mais promos</a>
				</div>
			</div>

		</div>

	<?php } ?>

</div>
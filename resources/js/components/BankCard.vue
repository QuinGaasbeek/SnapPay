<template>
  <div class="account-info" :class="bankClass">
    <div class="glass-effect"></div>
    <div class="info-container">
      <div class="bank-name">{{ bankName }}</div>
      <div class="iban">{{ formattedIban }}</div>
      <div class="name">{{ name }}</div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'BankCard',
  props: {
    iban: {
      type: String,
      required: true,
      validator: (value) => {
        return /^NL\d{2}[A-Z]{4}\d{10}$/.test(value.replace(/\s/g, ''))
      }
    },
    name: {
      type: String,
      required: true
    }
  },
  computed: {
    bankCode() {
      return this.iban.replace(/\s/g, '').slice(4, 8)
    },
    bankClass() {
      return `bank-${this.bankCode.toLowerCase()}`
    },
    bankName() {
      const banks = {
        'ABNA': 'ABN AMRO',
        'INGB': 'ING Bank',
        'RABO': 'Rabobank',
        'SNSB': 'SNS Bank',
        'KNAB': 'Knab',
        'BUNQ': 'bunq',
        'REGI': 'RegioBank'
      }
      return banks[this.bankCode] || 'Onbekende Bank'
    },
    formattedIban() {
      const cleanIban = this.iban.replace(/\s/g, '');
      return `${cleanIban.slice(0, 4)} ${cleanIban.slice(4, 8)} ${cleanIban.slice(8, 12)} ${cleanIban.slice(12, 16)} ${cleanIban.slice(16)}`;
    }
  }
}
</script>

<style scoped>
.account-info {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  border-radius: 16px;
  padding: 1.5rem;
  transition: all 0.3s ease;
  max-width: 400px;
  position: relative;
  overflow: hidden;
  border: 1px solid rgba(255, 255, 255, 0.1);
}

.glass-effect {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
      135deg,
      rgba(255, 255, 255, 0.1),
      rgba(255, 255, 255, 0.05)
  );
  pointer-events: none;
}

.account-info:hover {
  transform: translateY(-2px);
  border-color: rgba(255, 255, 255, 0.2);
  background: rgba(255, 255, 255, 0.15);
}

.info-container {
  position: relative;
  z-index: 1;
}

.bank-name {
  font-size: 0.9rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 1rem;
  color: rgba(255, 255, 255, 0.7);
}

.iban {
  font-size: 1.4rem;
  font-weight: 600;
  margin-bottom: 1rem;
  font-family: 'Roboto Mono', monospace;
  letter-spacing: 0.5px;
  color: white;
}

.name {
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.9);
  font-weight: 500;
}

/* Bank-specific styles */
.account-info::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
}

.bank-abna::after {
  background: #00A651;
}

.bank-ingb::after {
  background: #FF6200;
}

.bank-rabo::after {
  background: #000066;
}

.bank-snsb::after {
  background: #0099FF;
}

.bank-knab::after {
  background: #3B0078;
}

.bank-bunq::after {
  background: #3394D7;
}

.bank-regi::after {
  background: #009DE0;
}

/* Bank-specific background tints */
.bank-abna {
  background: rgba(0, 166, 81, 0.1);
}

.bank-ingb {
  background: rgba(255, 98, 0, 0.1);
}

.bank-rabo {
  background: rgba(0, 0, 102, 0.1);
}

.bank-snsb {
  background: rgba(0, 153, 255, 0.1);
}

.bank-knab {
  background: rgba(59, 0, 120, 0.1);
}

.bank-bunq {
  background: rgba(51, 148, 215, 0.1);
}

.bank-regi {
  background: rgba(0, 157, 224, 0.1);
}

@media (max-width: 480px) {
  .account-info {
    padding: 1rem;
  }

  .iban {
    font-size: 1.2rem;
  }

  .name {
    font-size: 1rem;
  }
}
</style>


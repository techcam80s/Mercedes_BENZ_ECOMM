# 🚗 Premium | Digital Agency Model Ecosystem

## 🎯 Context & Goal

"" is shifting to the **Agency Model** in New Zealand and Australia. Under this model:

- The **manufacturer sets the price and owns the stock**
- Dealers act as **brand agents**, focusing on customer experience and service

### ✅ Primary Goals:
- Centralised pricing and inventory
- Seamless customer journey (online to offline)
- Real-time stock and data visibility
- Modern UX (mobile & desktop)
- Streamlined tools for agents
- Integration with "" HQ systems

---

## 👤 1. Product-Led Architecture & User Flows

### A. User Personas
- **Customer**: Explore, reserve, or purchase a vehicle online
- **Agent (Dealer Staff)**: Manage test drives, queries, delivery
- **Admin ("" HQ)**: Manage pricing, inventory, and approvals

### B. Core Modules

#### 🚘 Vehicle Discovery Platform
- Search, compare, configure vehicles
- Real-time stock from central DB
- Transparent, fixed pricing

#### 📅 Test Drive Scheduling
- Live calendar for dealer slots
- Digital ID capture & validation
- CRM sync and automated reminders

#### 💰 Checkout & Finance
- Online reservation with digital deposit
- Finance pre-approval integration
- Trade-in estimator and booking

#### 🧑‍💼 Agent Dashboard
- Lead management and customer activity
- Test drive and delivery tracking

#### 🛠️ Admin Portal
- Pricing and promo controls
- Inventory sync and API management
- Dealer performance analytics

---

## 🔁 2. Feature Workflows

### 🔍 Vehicle Discovery Flow
```
Customer → Search/Filter → Configure Vehicle → See Availability → Fixed Pricing → Proceed to Test Drive or Reserve → Lead to Agent
```

### 🚗 Test Drive Scheduling Flow
```
Customer Books → Live Calendar API → Uploads ID → CRM Sync → Notifications to Agent + Customer → Post-Drive Feedback
```

### 💳 Checkout & Finance Flow
```
Customer Clicks Reserve → Deposit Payment → Trade-in Estimator (optional) → Finance Pre-Approval (optional) → Confirmation → Sync with Agent/Admin
```

### 🧑‍💼 Agent Dashboard Flow
```
Agent Logs In → Views Leads/Test Drives → Updates Status → Notes/Reminders → CRM Sync
```

### 🛠️ Admin Portal Flow
```
Admin Login → Pricing & Inventory Updates → API Push to Dealers → View Analytics & Access Management
```

---

## 📂 3. GitHub Project Flow

| Status       | Epic                                     | Task Example                         |
|--------------|------------------------------------------|--------------------------------------|
| To Do        | Frontend UX revamp                       | Mobile-first vehicle card redesign   |
| In Progress  | Agent dashboard build                    | CRM sync integration                 |
| In Progress  | Reservation & Test Drive module          | Digital ID verification integration  |
| Review       | API integrations with MB HQ              | Central inventory sync testing       |
| Done         | DevOps setup + CI/CD                     | GitHub Actions for auto-deployment   |

---

## 📅 4. Development Milestones

### 🔧 Month 1–2: Foundation
- DevOps setup (CI/CD, infra)
- Frontend MVP: Search, Filter, Vehicle Page
- Basic vehicle inventory backend

### 📋 Month 3–4: Core Functions
- Agent dashboard build
- Test drive scheduling
- Checkout workflow
- Admin portal & CRM integrations

### 📱 Month 5–6: Finalization
- Mobile app/PWA rollout
- Mercedes HQ integration (Inventory, Pricing APIs)
- Security & compliance testing (GDPR, PCI DSS)
- Soft launch & feedback loop

---

## 🔌 5. Integration Workflow with HQ
```
Admin Portal Update → Webhook Trigger → HQ API Response (Pricing/Inventory) → Sync Central DB → Live Frontend Update
```

---

## 🧠 6. UX Journey Flow
```
User Visits Platform
→ Personalised Interface
→ Fixed Transparent Pricing
→ Fast Checkout with Human Support
→ Omnichannel Follow-up
→ Track Delivery & Feedback
```

---

## 🛠️ Tools & Tech Stack (Suggested)
- **Frontend**: React / Next.js / Tailwind CSS
- **Backend**: Node.js / Express / PostgreSQL
- **APIs**: RESTful APIs / Webhooks
- **CRM**: Salesforce or HubSpot Integration
- **CI/CD**: GitHub Actions / Docker / Vercel
- **Mobile**: React Native or PWA
- **Security**: JWT, OAuth, GDPR & PCI Compliance

---

## 📌 Notes
- Align local dealer systems with global "" infrastructure.
- Prioritise performance, accessibility, and modern UI across devices.
- Design with both **B2C (Customer)** and **B2B (Dealer/Admin)** flows in mind.

---
